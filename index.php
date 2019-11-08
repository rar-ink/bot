<?php

const TOKEN = "1004092197:AAE2TX6Fx6_3WOLBG-9ILRTWELtNjStPylQ";
const BASE_URL = "https://api.telegram.org/bot" . TOKEN . '/getMe';

$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

function sendRequest($method, $params = [])
{
  if(!empty($params)) {
    $url = BASE_URL . $method . '?' . http_build_query($params);
  } else {
    $url = BASE_URL . $method;
  }
  return json_decode(
    file_get_contents($url),
    JSON_OBJECT_AS_ARRAY
  );
}

$time = date('H:m:s');

$chat_id = $update['message']['chat']['id'];
sendRequest('sendMessage', ['chat_id' => chat_id, 'text' => $time]);
?>
