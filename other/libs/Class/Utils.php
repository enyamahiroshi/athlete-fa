<?php
/**
 * 共通利用
 */
class Utils
{
    /**
     * __construct
     */
    public function __construct()
    {
    }

    /**
     * mode取得
     *
     * @return void
     */
    public static function mode()
    {
        $pattern = '/^[a-zA-Z0-9_]+$/';
        $mode = null;
        if (isset($_REQUEST['mode']) && preg_match($pattern, $_REQUEST['mode'])) {
            $mode =  $_REQUEST['mode'];
        }
        return $mode;
    }
    /**
     * 連想配列からセレクトボックスを生成します。
     * @param $srcArray 元となる連想配列
     * @param $selectedIndex selected属性を付加するインデックス
     * @return String
     */
    public static function html_select($srcArray = [], $selectedIndex = "")
    {
        $temphtml =  ''; 
        foreach ($srcArray as $id => $val) {
            if ($selectedIndex == $val) {
                $selected = ' selected="selected"';
            } else {
                $selected = '';
            }
            $temphtml .= '<option value="'. htmlspecialchars($val). '"'. $selected. '>'. htmlspecialchars($val). '</option>'. "\n";
        }
        return $temphtml;
    }
    /**
     * checkedの表示
     */
    public static function checked($index = '', $value = '')
    {
        if ($value && $value == $index) {
            echo ' checked';
        }
    }

    /**
     * エラー表示
     */
    public static function printErr($value = '')
    {
        if ($value) {
            echo '<span class="u-error">' . $value . '</span>';
        }
    }
    /**
     * input file の Acceptを出力
     */
    public static function printFileAccept($extensions = DOCUMENT_UPLOAD_FILE_EXT)
    {
        $accept = [];

        if (is_array($extensions)) {

            foreach ($extensions as $extension) {
                if ($extension) {
                    $accept[] = '.' . $extension;
                }
            }
        }
        echo implode(',', $accept);
    }
    /**
     * 長い文字に改行を追加
     *
     * @param string $string
     * @param integer $width
     * @param string $break
     * @param boolean $cut
     * @return string $string
     */
    public static function mbWordwrap($string, $width = 75, $break = "\n", $cut = true)
    {
        if (!$cut) {
            $regexp = '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){'.$width.',}\b#U';
        } else {
            $regexp = '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){'.$width.'}#';
        }
        $string_length = mb_strlen($string,'UTF-8');
        $cut_length = ceil($string_length / $width);
        $i = 1;
        $return = '';
        while ($i < $cut_length) {
            preg_match($regexp, $string,$matches);
            $new_string = $matches[0];
            $return .= $new_string.$break;
            $string = substr($string, strlen($new_string));
            $i++;
        }
        return $return.$string;
    }
}
