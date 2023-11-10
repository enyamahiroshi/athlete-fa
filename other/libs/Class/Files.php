<?php

/**
 * ファイル関連
 */
class Files
{
    /**
     * __construct
     */
    public function __construct()
    {
    }
    /**
     * 指定のフォルダへフィルをアップロード
     *
     * @return void
     */
    public static function upload($file = '', $name = '', $path = '')
    {
        $result = '';

        try {

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            $temp = pathinfo($name);

            if ($temp['filename'] && $temp['extension']) {
                $failname = $temp['filename'] . '_' . date("YmdHis") . '.' . $temp['extension'];
            } else {
                $failname = date("YmdHis") . '_' . $name;
            }

            if (move_uploaded_file($file, $path . $failname)) {
                $result = $failname;
            }

        } catch ( Exception $e ) {
            Logs::printLog("ERROR : " . $e->getMessage());
        }

        return $result;
    }

    /**
     * ファイルの存在チェック
     *
     * @return void
     */
    public static function has($name = '', $path = UPLOAD_PATH)
    {
        return file_exists($path . $name);
    }

    /**
     * 削除
     *
     * @return boolean
     */
    public static function deleteFile($name = '', $path = UPLOAD_PATH)
    {
        if (file_exists($path . $name)) {
            unlink($path . $name);
        }
    }

    /**
     * 古いファイルを削除
     *
     * @return boolean
     */
    public static function deleteFiles($path = '')
    {
        date_default_timezone_set('Asia/Tokyo');

        if ($path) {

            $expire = strtotime("-5 minute");

            $list = scandir($path);
            foreach ($list as $value) {
                $file = $path . $value;
                if (!is_file($file)) continue;
                $mod = filemtime($file);
                if ($mod < $expire) {
                    unlink($file);
                }
            }
        }
    }
}
