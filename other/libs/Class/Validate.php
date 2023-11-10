<?php
/**
 * バリデーション定義
 * 
 * - ec-cube流用
 */
class Validate
{
    public $arrErr = array();
    public $arrParam;
    /**
     * __construct
     */
    public function __construct($array = '')
    {
        if ($array != '') {
            $this->arrParam = $array;
        } else {
            $this->arrParam = $_POST;
        }
    }

    /**
     * @param string[] $arrFunc
     */
    public function doFunc($value, $arrFunc)
    {
        foreach ($arrFunc as $key) {
            $this->$key($value);
        }
    }
    /**
     * 必須入力の判定
     * @param  array $value value[0] = 項目名 value[1] = 判定対象
     * @return void
     */
    public function EXIST_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        $input_var = $this->arrParam[$keyname];
        if (is_array($input_var)) {
            if (count($input_var) == 0) {
                $this->arrErr[$keyname] =
                    "「{$disp_name}」が選択されていません。";
            }
        } else {
            if (strlen($input_var) == 0) {
                $this->arrErr[$keyname] =
                    "「{$disp_name}」が入力されていません。";
            }
        }
    }


    /**
     * 必須選択の判定
     *
     * プルダウンなどで選択されていない場合エラーを返す
     * @param  array $value value[0] = 項目名 value[1] = 判定対象
     * @return void
     */
    public function SELECT_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        if (strlen($this->arrParam[$keyname]) == 0) {
            $this->arrErr[$keyname] =
                "「{$disp_name}」が選択されていません。";
        }
    }
    /**
     * スペース、タブの判定
     *
     * 受け取りがない場合エラーを返す
     * @param  array $value value[0] = 項目名 value[1] = 判定対象
     * @return void
     */
    public function NO_SPTAB($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        $input_var = $this->arrParam[$keyname];
        if (strlen($input_var) != 0
            && preg_match("/[　 \t\r\n]+/u", $input_var)
        ) {
            $this->arrErr[$keyname] = sprintf(
                '「%s」にスペース、タブ、改行は含めないで下さい。',
                $disp_name
            );
        }
    }


    /**
     * スペース、タブの判定
     *
     * 受け取りがない場合エラーを返す
     * @param  array $value value[0] = 項目名 value[1] = 判定対象
     * @return void
     */
    public function SPTAB_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        $input_var = $this->arrParam[$keyname];
        if (strlen($input_var) != 0
            && preg_match("/^[ 　\t\r\n]+$/", $input_var)
        ) {
            $this->arrErr[$keyname] = sprintf(
                '※ %sにスペース、タブ、改行のみの入力はできません。',
                $disp_name
            );
        }
    }

    /**
     * 最大文字数制限の判定
     *
     * 入力が指定文字数以上ならエラーを返す
     * @param  integer[] $value value[0] = 項目名
     *                      value[1] = 判定対象文字列
     *                      value[2] = 最大文字数(半角も全角も1文字として数える)
     * @return void
     */
    public function MAX_LENGTH_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];
        $max_str_len = $value[2];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        // 文字数の取得
        if (mb_strlen($this->arrParam[$keyname]) > $max_str_len) {
            $this->arrErr[$keyname] = sprintf(
                '「%s」は%d字以下で入力してください。',
                $disp_name,
                $max_str_len
            );
        }
    }

    /**
     * 数字の判定
     *
     * 入力文字が数字以外ならエラーを返す
     * @param  array $value value[0] = 項目名 value[1] = 判定対象文字列
     * @return void
     */
    public function NUM_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        if ($this->numelicCheck($this->arrParam[$keyname])) {
            $this->arrErr[$keyname] =
                "「{$disp_name}」は数字で入力してください。";
        }
    }


    /**
     * 電話番号の判定
     *
     * @param array $value 
     * @return void
     */
    public function TEL_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }
        $this->createParam($value);
        $input_var = $this->arrParam[$keyname];
        $pattern = "/\A[0-9-]+\z/i";
        if (strlen($input_var) > 0 && !preg_match($pattern, $input_var)) {
            $this->arrErr[$keyname] = "「{$disp_name}」は半角数字・ハイフンで入力してください。";
        }
    }

    /**
     * ひらがなの判定
     * 
     * - タブ、スペースは許可する
     * - value[0] = 項目名 value[1] = 判定対象文字列
     *
     * @param [type] $value
     * @return void
     */
    public function HIRA_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        $input_var = $this->arrParam[$keyname];
        $pattern = "/^([　 \t\r\n]|[ぁ-ん]|[ー])+$/u";
        if (strlen($input_var) > 0 && !preg_match($pattern, $input_var)) {
            $this->arrErr[$keyname] = "「{$disp_name}」はひらがなで入力してください。<br />";
        }
    }

    /**
     * メールアドレス形式の判定
     *
     * @param array $value 各要素は以下の通り。<br>
     *     [0]: 項目名<br>
     *     [1]: 判定対象を格納している配列キー
     * @return void
     */
    public function EMAIL_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        // 入力がない場合処理しない
        if (strlen($this->arrParam[$keyname]) === 0) {
            return;
        }

        $wsp           = '[\x20\x09]';
        $vchar         = '[\x21-\x7e]';
        $quoted_pair   = "\\\\(?:$vchar|$wsp)";
        $qtext         = '[\x21\x23-\x5b\x5d-\x7e]';
        $qcontent      = "(?:$qtext|$quoted_pair)";
        $quoted_string = "\"$qcontent*\"";
        $atext         = '[a-zA-Z0-9!#$%&\'*+\-\/\=?^_`{|}~]';
        $dot_atom      = "$atext+(?:[.]$atext+)*";
        $local_part    = "(?:$dot_atom|$quoted_string)";
        $domain        = $dot_atom;
        $addr_spec     = "{$local_part}[@]$domain";

        $dot_atom_loose   = "$atext+(?:[.]|$atext)*";
        $local_part_loose = "(?:$dot_atom_loose|$quoted_string)";
        $addr_spec_loose  = "{$local_part_loose}[@]$domain";

        if (false) {
            $regexp = "/\A{$addr_spec}\z/";
        } else {
            // 携帯メールアドレス用に、..や.@を許容する。
            $regexp = "/\A{$addr_spec_loose}\z/";
        }

        if (!preg_match($regexp, $this->arrParam[$keyname])) {
            $this->arrErr[$keyname] = "「{$disp_name}」の形式が不正です。<br />";

            return;
        }

        // 最大文字数制限の判定 (#871)
        $arrValueTemp = $value;
        $arrValueTemp[2] = 256;
        $this->MAX_LENGTH_CHECK($arrValueTemp);
    }

    /**
     * ファイルのアップロードチェック
     *
     * @param [type] value[0] = 項目名 value[1] = 判定対象  value[2] = 指定サイズ(KB)
     * @return void
     */
    public function FILE_EXIST_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        $file_size = $_FILES[$keyname]['size'];
        if ($file_size == '' || !($file_size > 0)) {
            $this->arrErr[$keyname] = sprintf(
                '「%s」をアップロードして下さい。',
                $disp_name
            );
        }
    }

    /*　拡張子の判定　*/
    // 受け取りがない場合エラーを返す
    // value[0] = 項目名 value[1] = 判定対象 value[2]=array(拡張子)
    public function FILE_EXT_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];
        $arrExtension = $value[2];

        if (isset($this->arrErr[$keyname]) || count($arrExtension) == 0) {
            return;
        }

        $this->createParam($value);

        $match = false;
        $filename = $_FILES[$keyname]['name'];
        if (strlen($filename) >= 1) {
            foreach ($arrExtension as $check_ext) {
                $pattern = '/' . preg_quote('.' . $check_ext) . '$/i';
                $match = preg_match($pattern, $filename) >= 1;
                if ($match === true) {
                    break 1;
                }
            }
        }
        if ($match === false) {
            $str_ext = implode('・', $arrExtension);
            $this->arrErr[$keyname] = sprintf(
                '「%s」で許可されているファイル形式は、%sです。',
                $disp_name,
                $str_ext
            );
        }
    }

    /*　ファイルサイズの判定　*/
    // 受け取りがない場合エラーを返す
    // value[0] = 項目名 value[1] = 判定対象  value[2] = 指定サイズ(KB)
    public function FILE_SIZE_CHECK($value)
    {
        $disp_name = $value[0];
        $keyname = $value[1];
        $max_file_size = $value[2];

        if (isset($this->arrErr[$keyname])) {
            return;
        }

        $this->createParam($value);

        if ($_FILES[$keyname]['size'] > $max_file_size *  1024) {
            $byte = 'KB';
            if ($max_file_size >= 1000) {
                $max_file_size = $max_file_size / 1000;
                $byte = 'MB';
            }
            $this->arrErr[$keyname] = sprintf(
                '「%s」のファイルサイズは%d%s以下のものを使用してください。<br />',
                $disp_name,
                $max_file_size,
                $byte
            );
        }
    }

    /**
     * パラメーターとして適切な文字列かチェックする.(サブルーチン)
     *
     * 下記を満たす場合を真とする。
     * ・PHPコードとして評価可能であること。
     * ・評価した結果がスカラデータ(定数に指定できる値)であること。
     * 本メソッドの利用や改訂にあたっては、eval 関数の危険性を意識する必要がある。
     * @access private
     * @param string 評価する文字列
     * @return bool パラメーターとして適切な文字列か
     */
    public function evalCheck($value)
    {
        return @eval('return is_scalar(' . $value . ');');
    }

    /**
     * 未定義の $this->arrParam に空要素を代入する.
     *
     * @access private
     * @param  array $value 配列
     * @return void
     */
    public function createParam($value)
    {
        foreach ($value as $val_key => $key) {
            if ($val_key != 0 && (is_string($key) || is_int($key))) {
                if (!is_numeric($key) && preg_match('/^[a-z0-9_]+$/i', $key)) {
                    if (!isset($this->arrParam[$key])) $this->arrParam[$key] = '';
                    if (!is_array($this->arrParam[$key]) && strlen($this->arrParam[$key]) > 0
                          && (preg_match('/^[[:alnum:]\-\_]*[\.\/\\\\]*\.\.(\/|\\\\)/', $this->arrParam[$key]) || !preg_match('/\A[^\x00-\x08\x0b\x0c\x0e-\x1f\x7f]+\z/u', $this->arrParam[$key]))) {
                        $this->arrErr[$value[1]] = '「' . $value[0] . '」に禁止された記号の並びまたは制御文字が入っています。<br />';
                    }
                } elseif (preg_match('/[^a-z0-9_]/i', $key)) {
                    trigger_error('', E_USER_ERROR);
                }
            }
        }
    }

    /**
     * 値が数字だけかどうかチェックする
     *
     * @access private
     * @param  string  $string チェックする文字列
     * @return boolean 値が10進数の数値表現以外の場合 true
     */
    public function numelicCheck($string)
    {
        /*
         * XXX 10進数の数値表現か否かを調べたいだけだが,
         * ctype_digit() は文字列以外 false を返す.
         * string ではなく int 型の数値が入る場合がある.
         */
        $string = (string) $string;

        return strlen($string) > 0 && !ctype_digit($string);
    }

        /**
     * reCAPTCHA 
     *
     * @param string $recaptchaToken
     * @return string $message
     */
    public static function reCAPTCHA($recaptchaToken =  '')
    {
        $message = '';

        if (!$recaptchaToken) {
            $message = 'messages.recaptcha_not_error';
        } else {

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($curl, CURLOPT_POST, true );
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, FALSE);

            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(
                'secret' => GOOGLE_SECRET_KEY,
                'response' => $recaptchaToken
            )));
            
            /** エラーの際のリトライ（1回） */
            for ($i =0; $i <= 1; $i++) { 
                $response = curl_exec($curl);
                $errno = curl_errno($curl);
                if (CURLE_OK == $errno) {
                    break;
                }
            }

            if (CURLE_OK == $errno) {
                $result = json_decode($response ,true);
                if ($result['success']){

                    if (abs($result['score'] * 10) <= abs(RECAPTCHA_SCL * 10)) {
                        $message = 'messages.recaptcha_scl_message';
                    }
                } else {
                    $message = 'messages.' . $result['error-codes'][0];
                }
            } else {
                $message = 'messages.curl_connect_error';
            }
            curl_close($curl);
        }
        return $message;
    }

}
