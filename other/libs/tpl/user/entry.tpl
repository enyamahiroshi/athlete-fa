<?php echo $arrData['onamae']; ?> 様

この度はご応募いただきありがとうございます。
エントリーを受け付けましたので、後日担当よりご連絡いたします。

◆ エントリー内容について
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

●希望職種 ： <?php echo $arrData['kibojob']; ?><?php echo "\n"; ?>
●お名前 ： <?php echo $arrData['onamae']; ?><?php echo "\n"; ?>
●ふりがな ： <?php echo $arrData['furigana']; ?><?php echo "\n"; ?>
●メールアドレス ： <?php echo $arrData['mailaddress']; ?><?php echo "\n"; ?>
●電話番号 ： <?php echo $arrData['telnum']; ?><?php echo "\n"; ?>
●郵便番号 ： <?php echo $arrData['zipnum']; ?><?php echo "\n"; ?>
●ご住所 ： <?php echo Utils::mbWordwrap($arrData['address']); ?><?php echo "\n"; ?>
●履歴書 ： <?php echo $arrData['rirekisho_disp_failname']; ?><?php echo "\n"; ?>
●職務経歴書 ： <?php echo $arrData['keirekisho_disp_failname']; ?><?php echo "\n"; ?>

▼ ご相談内容 －－－－－－－－－－－－－－▼

<?php echo Utils::mbWordwrap($arrData["naiyo"]); ?><?php echo "\n"; ?>

－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－ 