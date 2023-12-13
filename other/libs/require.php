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

require_once DATA_REALDIR . '/Pages/ContactEng.php';


/**
 * session
 */
add_action('send_headers', function()
{
    $objSession = new Sessions();
    $objSession->initSession();
});


/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page('希望職種設定', '希望職種設定', 7, 'entry-options','', 20);
