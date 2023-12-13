Mr./Ms. <?php echo $arrData['firstname']; ?> <?php echo $arrData['lastname']; ?>,

Thank you for your inquiry. 
We will respond to you as soon as possible. If you do not receive a response within three business days, please do not hesitate to contact us again.


◆ Content of inquiry
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

●Company ： <?php echo $arrData['kaishamei']; ?><?php echo "\n"; ?>
●First name ： <?php echo $arrData['firstname']; ?><?php echo "\n"; ?>
●Last name ： <?php echo $arrData['lastname']; ?><?php echo "\n"; ?>
●E-mail ： <?php echo $arrData['mailaddress']; ?><?php echo "\n"; ?>
●Phone number ： <?php echo $arrData['telnum']; ?><?php echo "\n"; ?>
●Country ： <?php echo $arrData['country']; ?><?php echo "\n"; ?>
●Address ： <?php echo Utils::mbWordwrap($arrData['address']); ?><?php echo "\n"; ?>

▼ Request －－－－－－－－－－－－－－▼

<?php echo Utils::mbWordwrap($arrData["naiyo"]); ?><?php echo "\n"; ?>

－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－ 