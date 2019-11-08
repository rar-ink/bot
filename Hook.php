<?php

$url = "https://api.telegram.org/bot1004092197:AAGkyHB3XGrFV0ATWjhmQFrm70ajSBbPH-Q/setWebhook?url=https://rpgtestbot.herokuapp.com/index.php";
$l1=file_get_contents($url);
$response = json_decode($l1);
$s=print_r($response);

?>
