<?php

const TOKEN = '1004092197:AAE2TX6Fx6_3WOLBG-9ILRTWELtNjStPylQ';
$method = 'setWebhook';

$url = 'https://api.telegram.org/bot' . TOKEN . '/' . $method;
$option = [
    'url' => 'https://rpgtestbot.herokuapp.com/index.php',
];

$responce = file_get_contents($url . '?' . http_build_query($options));

var_dump($responce);
?>
