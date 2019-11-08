<?php

$url = "https://api.telegram.org/bot1004092197:AAE2TX6Fx6_3WOLBG-9ILRTWELtNjStPylQ/setWebhook?url=https://rpgtestbot.herokuapp.com/index.php";
$l1=file_get_contents($url);
$response = json_decode($l1);
$s=print_r($response);

?>
