<?php



require "vendor/autoload.php";

$access_token = 'qQ1G9SGgcSA6VLbCsV87Qe8OghrUcT/6Dtvz6c20yeMD10g40EKF5kXKI/8yQQKQmPhIedKeeiE8COt31a8HSU7GDdKlQmIXV55DseMSzok5UMMD45QiNIJkcSRp6wK+aPnq0KLPTNnguI49hRaN/AdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e3afce582cff33239d305508feba5fee';

$pushID = 'Uec8f8242a2ed3c8224dd9d4c650eb87e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







