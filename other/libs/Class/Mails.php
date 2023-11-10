<?php
/**
 * メール送信関連
 */
class Mails
{
    /**
     * __construct
     */
    public function __construct()
    {
    }

    /**
     * お問い合わせ
     *
     * @param string $mail
     * @param array $arrData
     * @return void
     */
    public function contact($mail, $arrData)
    {
        if(!$mail){
            return false;
        }
        try {
            /** 管理者に送信 */
            ob_start();
            require_once(realpath(dirname(__FILE__) . '/../tpl/admin/contact.tpl'));
            $notice = ob_get_contents();
            ob_end_clean();

            $mail_sender = CONTACT_MAIL_SENDER;
            if($arrData['onamae']){
                $mail_sender = $arrData['onamae'];
            }
            $reply_to_mail = CONTACT_REPLY_TO_MAIL;
            if($mail){
                $reply_to_mail = $mail;
            }

            $this->send_mail(CONTACT_MAIL_TITLE_ADMIN, $notice, CONTACT_SEND_MAIL, '', '', CONTACT_FROM_MAIL, $mail_sender, $reply_to_mail);

        } catch ( Exception $e ) {
            Logs::printLog("ERROR : " . $e->getMessage());
            return false;
        }
        try {
            /** ユーザーに送信 */
            ob_start();
            require_once(realpath(dirname(__FILE__) . '/../tpl/user/contact.tpl'));
            $notice = ob_get_contents();
            ob_end_clean();

            $this->send_mail(CONTACT_MAIL_TITLE_USER, $notice, $mail, '', '', CONTACT_FROM_MAIL, CONTACT_MAIL_SENDER, CONTACT_REPLY_TO_MAIL);

        } catch ( Exception $e ) {
            Logs::printLog("ERROR : " . $e->getMessage());
            return false;
        }

        return true;
    }

    /**
     * エントリー
     *
     * @param string $mail
     * @param array $arrData
     * @return void
     */
    public function entry($mail, $arrData, $attachments = [])
    {
        if(!$mail){
            return false;
        }
        try {
            /** 管理者に送信 */
            ob_start();
            require_once(realpath(dirname(__FILE__) . '/../tpl/admin/entry.tpl'));
            $notice = ob_get_contents();
            ob_end_clean();

            $mail_sender = ENTRY_MAIL_SENDER;
            if($arrData['onamae']){
                $mail_sender = $arrData['onamae'];
            }
            $reply_to_mail = ENTRY_REPLY_TO_MAIL;
            if($mail){
                $reply_to_mail = $mail;
            }

            $this->send_mail(ENTRY_MAIL_TITLE_ADMIN, $notice, ENTRY_SEND_MAIL, '', '', ENTRY_FROM_MAIL, $mail_sender, $reply_to_mail, $attachments);

        } catch ( Exception $e ) {
            Logs::printLog("ERROR : " . $e->getMessage());
            return false;
        }
        try {
            /** ユーザーに送信 */
            ob_start();
            require_once(realpath(dirname(__FILE__) . '/../tpl/user/entry.tpl'));
            $notice = ob_get_contents();
            ob_end_clean();

            $this->send_mail(ENTRY_MAIL_TITLE_USER, $notice, $mail, '', '', ENTRY_FROM_MAIL, ENTRY_MAIL_SENDER, ENTRY_REPLY_TO_MAIL);

        } catch ( Exception $e ) {
            Logs::printLog("ERROR : " . $e->getMessage());
            return false;
        }

        return true;
    }
    /**
     * メール送信
     *
     * @param   $title      メールタイトル
     * @param   $notice     本文
     * @param   $mail       送信先アドレス
     * @param   $cc         CCアドレス
     * @param   $bcc        BCCアドレス
     * @param   $from       送信元メールアドレス
     * @param   $sender     送信元名前
     *
     */
    public function send_mail($title, $notice, $mail, $cc = "", $bcc = "", $from = "", $sender = "", $replyTo = "", $attachments = [])
    {
        mb_language("Ja") ;
        mb_internal_encoding("UTF-8");

        $subject  = mb_convert_kana($title, "K");
        $notice = mb_convert_encoding(mb_convert_kana($notice, "K"), 'ISO-2022-JP-MS');

        if (!empty($attachments)) {

            $boundary = '__BOUNDARY__' . md5(rand());
            $headers = "Content-Type: multipart/mixed;boundary=\"{$boundary}\"\n";
            $headers .= sprintf("From: %s<%s>", mb_encode_mimeheader($sender), $from);
            $body = "--{$boundary}\n";
            $body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n";
            $body .= "\n{$notice}\n";

            foreach ($attachments as $type => $attachment) {
                $filebase = mb_encode_mimeheader(self::mbConvertKana($attachment['file_name']));
                $mime_type = $attachment['mime_type'];
                $body .= "--{$boundary}\n";
                $body .= "Content-Type: {$mime_type}; name=\"{$filebase}\"\n";
                $body .= "Content-Disposition: attachment; filename=\"{$filebase}\"\n";
                $body .= "Content-Transfer-Encoding: base64\n";
                $body .= "\n";
                $body .= chunk_split(base64_encode(file_get_contents($attachment['filepath'])))."\n";
            }
            $body .= "--{$boundary}--";
        } else {
            $headers = sprintf("From: %s<%s>", mb_encode_mimeheader($sender), $from);
            $body  = $notice;
        }

        if ($replyTo) {
            $headers .= "\r\nReply-To: " . $replyTo;
        }

        if ( $cc) {
            $headers .= "\r\nCc: " . $cc;
        }

        if ( $bcc) {
            $headers .= "\r\nBcc: " . $bcc;
        }

        $pfrom = "-f  " . $from;

        return mb_send_mail($mail, $subject, $body, $headers, $pfrom);
    }


    function mbConvertKana($string)
    {
        $mbConvertKana = function ($str) {
            if (preg_match("/^[ぁ-んー]+/u", $str)) {
                $option = "H";
            } elseif (preg_match("/^[ァ-ヶー]+/u", $str)) {
                $option = "K";
            }
            if (!empty($option)) {
                $str = mb_convert_kana($str, mb_strtolower($option), "UTF-8");
                // 3099,309A
                $str = str_replace(array("゙", "゚"), array("ﾞ", "ﾟ"), $str);
                // 309B,309C
                $str = str_replace(array("゛", "゜"), array("ﾞ", "ﾟ"), $str);
                
                $str = mb_convert_kana($str, $option . "V", "UTF-8");
            }
            // 「す」とかの次に「ﾞ」など正しくない半濁音が付いてた場合は、2文字以上になるため、半濁音を削除
            if (mb_strlen($str) > 1) {
                $char =  mb_substr($str, 0, 1);
                $str = $char;
            }

            return $str;
        };

        $ilegal_pattern = "/([\x{3099}\x{309A}\x{309B}\x{309C}])/u";
        preg_match_all($ilegal_pattern, $string, $matches);

        foreach ($matches as $match) {
            foreach ($match as $val) {
                $position = mb_stripos($string, $val);
                if ($position === false) {
                    continue;
                }
                $replace = mb_substr($string, $position - 1, 2);
                $replacer = $mbConvertKana($replace);
                $string = str_replace($replace, $replacer, $string);
            }

        }
        return $string;
    }
}