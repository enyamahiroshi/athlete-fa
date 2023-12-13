<?php
/*  基本設定 ------------- */

/** APP NAME（COOKIE NAME）  */
define('APP_NAME', 'athlete-fa_FormApp');

/** COOKIE設定用:ドメイン */
define('DOMAIN_NAME', $_SERVER["HTTP_HOST"]);

/** COOKIE設定用:パス */
define('ROOT_PATH', '/');

/** トランザクション名 */
define('TRANSACTION_NAME', 'tids');


/* ログ関連
 ---------------------------------------*/
/** 標準ログファイル */
define('LOG_REALFILE', realpath(dirname(__FILE__)) . "/../logs/site.log");
/** ログファイル最大数(ログテーション) */
define('MAX_LOG_QUANTITY', 3);
/** ログファイルに保存する最大容量(byte) */
define('MAX_LOG_SIZE', "1000000");


/* ページスラッグ関連
 ---------------------------------------*/

/** お問い合わせ登録・確認・完了画面 */
define('CONTACT_INPUT_SLUG', 'contact');
define('CONTACT_CONFIRM_SLUG', 'contact/contact-confirm');
define('CONTACT_COMPLETE_SLUG', 'contact/contact-complete');

/** （英語）お問い合わせ登録・確認・完了画面 */
define('CONTACT_EN_INPUT_SLUG', 'en/contact-en');
define('CONTACT_EN_CONFIRM_SLUG', 'en/contact-en/contact-confirm-en');
define('CONTACT_EN_COMPLETE_SLUG', 'en/contact-en/contact-complete-en');


/** お申し込み登録・完了画面 */
define('ENTRY_INPUT_SLUG', 'recruit/entry');
define('ENTRY_CONFIRM_SLUG', 'recruit/entry/entry-confirm');
define('ENTRY_COMPLETE_SLUG', 'recruit/entry/entry-complete');

/* ファイル関連
 ---------------------------------------*/

/** ファイル設置ディレクトリ */
define('UPLOAD_PATH', dirname(__FILE__) . "/../upload/");

define('JS_CHECK_FILE_SIZE', DOCUMENT_UPLOAD_FILE_SIZE * 1024);

/* その他（イレギュラーメッセージ関連）
 ---------------------------------------*/

/** reCAPTCHA */
define('RECAPTCHA_ERRORS', 'reCAPTCHAの認証に失敗しました。大変お手数ですが、再度フォームより送信をお願い致します。<br>引き続き処理に失敗する場合は、お手数ですがしばらくしてから行っていただくか、管理者にお問い合わせください。');

/** 不正な移動 */
define('VALIDTOKEN_ERRORS', '不正なページ移動がありました。大変お手数ですが、再度フォームより送信をお願い致します。<br>引き続き処理に失敗する場合は、お手数ですがしばらくしてから行っていただくか、管理者にお問い合わせください。');

/** 入力値おかしい場合 */
define('CONTENT_INPUT_ERRORS', '入力された情報に不備がございます。大変お手数ですが、再度フォームより送信をお願い致します。<br>引き続き処理に失敗する場合は、お手数ですがしばらくしてから行っていただくか、管理者にお問い合わせください。');

/** メール送信失敗 */
define('MAILL_ERRORS', 'メール送信に失敗しました。大変お手数ですが、再度フォームより送信をお願い致します。<br>引き続き処理に失敗する場合は、お手数ですがしばらくしてから行っていただくか、管理者にお問い合わせください。');

/** ファイルアップロードの失敗 */
define('FILE_COMPLETE_ERRORS', 'ファイルの登録に失敗しました。お手数ですが再度の登録を行なってください。<br>引き続き処理に失敗する場合は、お手数ですがしばらくしてからご登録いただくか、管理者にお問い合わせください。');

/* 英語フォーム用
 ---------------------------------------*/

/** reCAPTCHA */
define('EN_RECAPTCHA_ERRORS', 'The reCAPTCHA authentication failed. We apologize for the inconvenience, but please submit the form again. If the process continues to fail, please try again in a few minutes or contact the administrator.');

/** 不正な移動 */
define('EN_VALIDTOKEN_ERRORS', 'There was an incorrect page move. We apologize for the inconvenience, but please submit the form again. If the process continues to fail, please try again in a few minutes or contact the administrator.');

/** 入力値おかしい場合 */
define('EN_CONTENT_INPUT_ERRORS', 'The information you entered is incomplete. Please submit the form again. If the process continues to fail, please try again in a few minutes or contact the administrator.');

/** メール送信失敗 */
define('EN_MAILL_ERRORS', 'Email transmission failed. Please submit the form again. If the process continues to fail, please try again in a few minutes or contact the administrator.');
