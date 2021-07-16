<?php


$access_token = 'qQ1G9SGgcSA6VLbCsV87Qe8OghrUcT/6Dtvz6c20yeMD10g40EKF5kXKI/8yQQKQmPhIedKeeiE8COt31a8HSU7GDdKlQmIXV55DseMSzok5UMMD45QiNIJkcSRp6wK+aPnq0KLPTNnguI49hRaN/AdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

