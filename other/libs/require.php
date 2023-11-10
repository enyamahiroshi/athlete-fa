<?php
/**
 * 
 * 基本ファイルのインクルード
 *
 * - functionsフォルダ内のphp を require_once
 * - functions.php が 肥大化を防止
 *
 * ---------------------------------------------------------------- */


ini_set('date.timezone', 'Asia/Tokyo');

// DEFINE
require_once realpath(dirname(__FILE__)) . '/config/config.php';
require_once realpath(dirname(__FILE__)) . '/config/system.php';


// 各クラスファイルのパス設定
if (!defined('DATA_REALDIR')) {
    define('DATA_REALDIR', realpath(dirname(__FILE__) . "/Class"));
}

require_once DATA_REALDIR . '/Utils.php';

require_once DATA_REALDIR . '/Logs.php';

require_once DATA_REALDIR . '/Sessions.php';

require_once DATA_REALDIR . '/Validate.php';

require_once DATA_REALDIR . '/Files.php';

require_once DATA_REALDIR . '/Mails.php';

require_once DATA_REALDIR . '/Pages/Contact.php';

require_once DATA_REALDIR . '/Pages/Entry.php';

/**
 * session
 */
add_action('send_headers', function()
{
    $objSession = new Sessions();
    $objSession->initSession();
});