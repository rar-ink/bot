<?php
$json = file_get_contents('php://input');
$obj = json_decode($json, TRUE);

if (isset($obj['message']))
{
$first_name="";
$last_name="";
$username="";
$text="";
 
$chat_id=$obj['message']['chat']['id'];
if ($obj['message']['chat']['type']=="private")
{
if (isset($obj['message']['chat']['first_name'])) $first_name=$obj['message']['chat']['first_name'];
if (isset($obj['message']['chat']['last_name'])) $last_name=$obj['message']['chat']['last_name'];
if (isset($obj['message']['chat']['username'])) $username=$obj['message']['chat']['username'];
 
if ($first_name!="" AND $last_name!="") $text="Здравствуйте, ".$first_name." ".$last_name."!";
if ($text!="")
{
$text=urlencode ($text);
$url = "https://api.telegram.org/bot".$Telegram_botkey."/sendMessage?chat_id=".$chat_id."&amp;text=".$text."&amp;parse_mode=HTML&amp;disable_web_page_preview=false&amp;disable_notification=false";
$json=file_get_contents($url);
};
} //private chat
}; //message
