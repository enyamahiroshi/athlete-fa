<?php echo $arrData['onamae']; ?> 様

この度はお問い合わせありがとうございます。
内容を確認後、後日担当よりご連絡いたします。

◆ お問い合わせ内容
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

●会社名 ： <?php echo $arrData['kaishamei']; ?><?php echo "\n"; ?>
●お名前 ： <?php echo $arrData['onamae']; ?><?php echo "\n"; ?>
●ふりがな ： <?php echo $arrData['furigana']; ?><?php echo "\n"; ?>
●メールアドレス ： <?php echo $arrData['mailaddress']; ?><?php echo "\n"; ?>
●電話番号 ： <?php echo $arrData['telnum']; ?><?php echo "\n"; ?>
●郵便番号 ： <?php echo $arrData['zipnum']; ?><?php echo "\n"; ?>
●ご住所 ： <?php echo Utils::mbWordwrap($arrData['address']); ?><?php echo "\n"; ?>

▼ ご相談内容 －－－－－－－－－－－－－－▼

<?php echo Utils::mbWordwrap($arrData["naiyo"]); ?><?php echo "\n"; ?>

－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－ 