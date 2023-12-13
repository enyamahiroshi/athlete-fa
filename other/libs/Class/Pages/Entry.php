<?php
/**
 * - エントリーフォーム
 * 
 * 
 * 
 * 
 * 
 */
class Entry
{
    public $objSessions;

    public $arrData;

    public $arrErr;

    public $filenames;

    public function __construct($tempKey = 'tempEntry')
    {
        $this->objSessions = new Sessions();

        if (!isset($_SESSION[$tempKey])) {
            $_SESSION[$tempKey] = [];
        }
        $this->tempRequestSession = &$_SESSION[$tempKey];

        $this->filenames = [
            'rirekisho' => '履歴書',
            'keirekisho' => '職務経歴書',
        ];
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

                    $arrErr = [];
                    $this->arrData = $_POST;

                    foreach ($_FILES as $key => $file) {

                        if ($file['name']) {

                            $arrErr[$key] = $this->checkFiles($key, $this->arrData);

                            if (!$arrErr[$key]) {
                                $failname = Files::upload($file["tmp_name"], $file['name'], UPLOAD_PATH);
                                if ($failname) {
                                    $this->arrData[$key . '_failname'] = $failname;
                                    $this->arrData[$key . '_disp_failname'] = $file['name'];
                                } else {
                                    $arrErr[$key] = sprintf(
                                        '「%s」のアップロードに失敗しました。',
                                        $this->filenames[$key]
                                    );
                                }
                            }

                        } else {
                            if (!$this->arrData[$key . '_failname'] || !$this->arrData[$key . '_disp_failname']) {
                                $arrErr[$key] = sprintf(
                                    '「%s」をアップロードして下さい。',
                                    $this->filenames[$key]
                                );
                            }
                        }
                    }

                    $this->arrErr = array_merge($this->lfCheckError($this->arrData, true), $arrErr);

                    if (!$this->arrErr) {
                        $this->seve($this->arrData);
                        wp_redirect(get_permalink(get_page_by_path(ENTRY_CONFIRM_SLUG)->ID));
                        exit;
                    }
                } else {
                    $this->exceptionErr = VALIDTOKEN_ERRORS;
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
            wp_redirect(get_permalink(get_page_by_path(ENTRY_INPUT_SLUG)->ID));
            exit;
        }

        $this->arrData = $this->tempRequestSession;

        switch (Utils::mode()) {
            case 'complete':
                if ($this->objSessions->isValidToken()) {

                    $this->arrErr = $this->lfCheckError($this->arrData);

                    if (!$this->arrErr) {

                        if (
                            Files::has($this->arrData['rirekisho_failname']) &&
                            Files::has($this->arrData['keirekisho_failname'])
                        ) {

                            $attachments = $this->getAttachments($this->arrData);

                            try {

                                $objMails = new Mails();

                                if ($objMails->entry($this->arrData['mailaddress'], $this->arrData, $attachments)) {

                                    $this->tempRequestSession = [];
                                    unset($this->tempRequestSession);

                                    Files::deleteFile($this->arrData['rirekisho_failname']);
                                    Files::deleteFile($this->arrData['keirekisho_failname']);
                                    Files::deleteFiles(UPLOAD_PATH);

                                    wp_redirect(get_permalink(get_page_by_path(ENTRY_COMPLETE_SLUG)->ID));
                                    exit;
                                } else {
                                    $this->exceptionErr = MAILL_ERRORS;
                                }
                            } catch (Exception $e) {
                                Logs::printLog($e->getMessage());
                            }
                        } else {
                            $this->exceptionErr = FILE_COMPLETE_ERRORS;
                        }
                    } else {
                        $this->exceptionErr = CONTENT_INPUT_ERRORS;
                    }
                } else {
                    $this->exceptionErr = VALIDTOKEN_ERRORS;
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
        $url = get_permalink(get_page_by_path(ENTRY_CONFIRM_SLUG)->ID);
        if (!isset($_SERVER['HTTP_REFERER']) || strpos($_SERVER['HTTP_REFERER'], $url) === false){
            wp_redirect(get_permalink(get_page_by_path(ENTRY_INPUT_SLUG)->ID));
            exit;
        }
    }

    /**
     * 入力チック
     *
     * @param array $arrForm
     * @param boolean $admin 
     * @return void
     */
    function lfCheckError($arrForm = [], $recaptchaCheck = false)
    {
        $objErr = new Validate($arrForm);
        $objErr->doFunc(['希望職種', 'kibojob'], ['SELECT_CHECK']);
        $objErr->doFunc(['お名前', 'onamae', 50], ['EXIST_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['ふりがな', 'furigana', 50], ['MAX_LENGTH_CHECK', 'HIRA_CHECK']);
        $objErr->doFunc(['メールアドレス', 'mailaddress', 250], ['EXIST_CHECK', 'MAX_LENGTH_CHECK', 'EMAIL_CHECK']);
        $objErr->doFunc(['電話番号', 'telnum', 15], ['EXIST_CHECK', 'TEL_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['郵便番号', 'zipnum', 8], ['TEL_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['住所', 'address', 200], ['MAX_LENGTH_CHECK']);
        $objErr->doFunc(['ご相談内容', 'naiyo', 3000], ['EXIST_CHECK', 'MAX_LENGTH_CHECK']);
        $objErr->doFunc(['規約に同意する', 'agree'], ['SELECT_CHECK']);

        if ($recaptchaCheck && isset($arrForm['g-recaptcha-response'])) { 
            $result_message = $objErr->reCAPTCHA($arrForm['g-recaptcha-response']);
            if ($result_message) {
                Logs::printLog("reCAPTCHA ERROR : " . $result_message);
                $objErr->arrErr['g-recaptcha-response'] = RECAPTCHA_ERRORS;
            }
        }

        return $objErr->arrErr;
    }

    /**
     * ファイルチェック処理
     *
     * @param array $arrForm
     * @return void
     */
    public static function checkFiles($keyname = '', $arrData = [])
    {
        $objErr = new Validate();

        switch ($keyname) {
            case 'rirekisho':
                $objErr->doFunc(['履歴書', 'rirekisho'], ['FILE_EXIST_CHECK']);
                $objErr->doFunc(['履歴書', 'rirekisho', DOCUMENT_UPLOAD_FILE_EXT], ['FILE_EXT_CHECK']);
                $objErr->doFunc(['履歴書', 'rirekisho', DOCUMENT_UPLOAD_FILE_SIZE], ['FILE_SIZE_CHECK']);
                break;
            case 'keirekisho':
                $objErr->doFunc(['職務経歴書', 'keirekisho'], ['FILE_EXIST_CHECK']);
                $objErr->doFunc(['職務経歴書', 'keirekisho', DOCUMENT_UPLOAD_FILE_EXT], ['FILE_EXT_CHECK']);
                $objErr->doFunc(['職務経歴書', 'keirekisho', DOCUMENT_UPLOAD_FILE_SIZE], ['FILE_SIZE_CHECK']);
                break;
            default:
                break;
        }
        return $objErr->arrErr[$keyname] ?? '';
    }

    /**
     * 添付情報をセット
     *
     * @param array $arrForm
     * @return void
     */
    public function getAttachments($arrData)
    {
        $attachments = [];

        if (!empty($arrData['rirekisho_failname'])) {
            $tmpfile = [];
            $tmpfile['file_name'] = $arrData['rirekisho_failname'];
            $tmpfile['filepath'] = UPLOAD_PATH . $arrData['rirekisho_failname'];
            $tmpfile['mime_type'] = mime_content_type($tmpfile['filepath']);
            $attachments['rirekisho_failname'] = $tmpfile;
        }

        if (!empty($arrData['keirekisho_failname'])) {
            $tmpfile = [];
            $tmpfile['file_name'] = $arrData['keirekisho_failname'];
            $tmpfile['filepath'] = UPLOAD_PATH . $arrData['keirekisho_failname'];
            $tmpfile['mime_type'] = mime_content_type($tmpfile['filepath']);
            $attachments['keirekisho_failname'] = $tmpfile;
        }
        return $attachments;
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
