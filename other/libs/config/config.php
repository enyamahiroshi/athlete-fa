<?php

/* メール関連設定
 ---------------------------------------*/

/**
 * reCAPTCHA
 * 
 * GOOGLE_SITE_KEYが未設定の場合は、reCAPTCHAは非表示となります。
 * 
 */

/** サイトキー */
define('GOOGLE_SITE_KEY', '6LfYV1ckAAAAAKl_9OJ7QS64GrERLtxaKetTYo7W');


/** シークレットキー */
define('GOOGLE_SECRET_KEY', '6LfYV1ckAAAAAOmSjTpvopUyjCfxPpOhJzguAfIS');

/** リキャプチャーの閾値（0.1〜1.0の間で指定） */
define('RECAPTCHA_SCL', 0.5);

/**
 * お問い合わせフォーム設定
 */

/** 送信元メールアドレス */
define('CONTACT_FROM_MAIL', 'mizuno.rimi@prart.jp');

/** メールの差出人名 */
define('CONTACT_MAIL_SENDER' , 'アスリートFA株式会社');

/** 送信先メールアドレス */
define('CONTACT_SEND_MAIL', 'mizuno.rimi@prart.jp');

/** 返信時のメールアドレス（管理者宛はお客さまメールアドレスとなります） */
define('CONTACT_REPLY_TO_MAIL', CONTACT_FROM_MAIL);

/** メール件名 */
define('CONTACT_MAIL_TITLE_USER', 'お問い合わせを受け付けました');
define('CONTACT_MAIL_TITLE_ADMIN', 'ウェブサイトよりお問い合わせがありました');


/**
 * エントリーフォーム設定
 */

/** 送信元メールアドレス */
define('ENTRY_FROM_MAIL', CONTACT_FROM_MAIL);

/** メールの差出人名 */
define('ENTRY_MAIL_SENDER' , CONTACT_MAIL_SENDER);

/** 送信先メールアドレス */
define('ENTRY_SEND_MAIL', 'mizuno.rimi@prart.jp');

/** 返信時のメールアドレス（管理者宛はお客さまメールアドレスとなります） */
define('ENTRY_REPLY_TO_MAIL', ENTRY_FROM_MAIL);

/** メール件名 */
define('ENTRY_MAIL_TITLE_USER', 'エントリーを受け付けました');
define('ENTRY_MAIL_TITLE_ADMIN', 'ウェブサイトより採用エントリーがありました');

/** 添付ファイル有効拡張子 */
define('DOCUMENT_UPLOAD_FILE_EXT', ['pdf','doc','docx','xml']);

/** 添付ファイルサイズ制限 単位:KB（1MB:1024） */
define('DOCUMENT_UPLOAD_FILE_SIZE', 15360);

/** 希望職種 */
define('ITEM_KIBOJOB', [
    '選択肢1',
    '選択肢2',
    '選択肢3'
]);


