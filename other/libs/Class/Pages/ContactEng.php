<?php
/**
 * - お問い合わせ
 * 
 * 
 * 
 * 
 * 
 */
class ContactEng
{
    public $objSessions;

    public $tempRequestSession;

    public $exceptionErr;

    public function __construct($tempKey = 'tempContact')
    {
        $this->objSessions = new Sessions();

        if (!isset($_SESSION[$tempKey])) {
            $_SESSION[$tempKey] = [];
        }
        $this->tempRequestSession = &$_SESSION[$tempKey];
    }
    /**
     * 入力画面用
     *
     * @return void
     */
    public function main()
    {

        switch (Utils::mode()) {

            case 'confirm':

                if ($this->objSessions->isValidToken()) {

                    $this->arrData = $_POST;
                    $this->arrErr = $this->lfCheckError($this->arrData, true);

                    if (!$this->arrErr) {
                        $this->seve($this->arrData);
                        wp_redirect(get_permalink(get_page_by_path(CONTACT_EN_CONFIRM_SLUG)->ID));
                        exit;
                    }
                } else {
                    $this->exceptionErr = EN_VALIDTOKEN_ERRORS;
                }
                break;
            default:
                $this->arrData = $this->tempRequestSession;
                break;
        }
    }
    /**
     * 確認画面
     *
     * @return void
     */
    public function confirm()
    {

        if (empty($this->tempRequestSession)) {
            wp_redirect(get_permalink(get_page_by_path(CONTACT_EN_INPUT_SLUG)->ID));
            exit;
        }

        $this->arrData = $this->tempRequestSession;

        switch (Utils::mode()) {
            case 'complete':
                if ($this->objSessions->isValidToken()) {

                    $this->arrErr = $this->lfCheckError($this->arrData);

                    if (!$this->arrErr) {
                        try {

                            $objMails = new Mails();

                            if ($objMails->englishContact($this->arrData['mailaddress'], $this->arrData)) {

                                $this->tempRequestSession = [];
                                unset($this->tempRequestSession);

                                wp_redirect(get_permalink(get_page_by_path(CONTACT_EN_COMPLETE_SLUG)->ID));
                                exit;
                            } else {
                                $this->exceptionErr = EN_MAILL_ERRORS;
                            }
                        } catch (Exception $e) {
                            Logs::printLog($e->getMessage());
                        }
                    } else {
                        $this->exceptionErr = EN_CONTENT_INPUT_ERRORS;
                    }
                } else {
                    $this->exceptionErr = EN_VALIDTOKEN_ERRORS;
                }
            default:
                break;
        }
    }

    /**
     * 完了画面
     *
     * @return void
     */
    public function thanks()
    {
        $url = get_permalink(get_page_by_path(CONTACT_EN_CONFIRM_SLUG)->ID);
        if (!isset($_SERVER['HTTP_REFERER']) || strpos($_SERVER['HTTP_REFERER'], $url) === false){
            wp_redirect(get_permalink(get_page_by_path(CONTACT_EN_INPUT_SLUG)->ID));
            exit;
        }
    }

    /**
     * 会員情報入力チック
     *
     * @param array $arrForm
     * @param boolean $admin 
     * @return void
     */
    function lfCheckError($arrForm = [], $recaptchaCheck = false)
    {
        $objErr = new Validate($arrForm, 'en');
        $objErr->doFunc(['Company', 'kaishamei', 50], ['EXIST_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['Last name', 'lastname', 50], ['EXIST_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['First name', 'firstname', 50], ['EXIST_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['E-mail', 'mailaddress', 250], ['EXIST_CHECK', 'MAX_LENGTH_CHECK', 'EMAIL_CHECK']);
        $objErr->doFunc(['Phone number', 'telnum', 20], ['EXIST_CHECK', 'EN_TEL_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['Country', 'country', 50], ['MAX_LENGTH_CHECK']);
        $objErr->doFunc(['Address', 'address', 200], ['MAX_LENGTH_CHECK']);
        $objErr->doFunc(['Request', 'naiyo', 3000], ['EXIST_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['Agree', 'agree'], ['SELECT_CHECK']);

        if ($recaptchaCheck && GOOGLE_SITE_KEY) {
            if (isset($arrForm['g-recaptcha-response'])) { 
                $result_message = $objErr->reCAPTCHA($arrForm['g-recaptcha-response']);
                if ($result_message) {
                    Logs::printLog("reCAPTCHA ERROR : " . $result_message);
                    $objErr->arrErr['g-recaptcha-response'] = EN_RECAPTCHA_ERRORS;
                }
            } else {
                $objErr->arrErr['g-recaptcha-response'] = EN_RECAPTCHA_ERRORS;
                Logs::printLog("reCAPTCHA ERROR : g-recaptcha-response do not");
            }
        }

        return $objErr->arrErr;
    }


    /**
     * セッション保存処理
     *
     * @param array $params
     * @return void
     */
    public function seve($params = [])
    {
        foreach ($params as $key => $value) {
            $this->tempRequestSession[$key] = $value;
        }
    }
}
