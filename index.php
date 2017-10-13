<?php
$access_token = '0vAGpxZG7+30kW017m20c4MbGes89RLuH9TgE2sEmT/6Boz4ZEyUUsdK63kae3MEeMe1HEnUoNj6F2o6e/DtdoYrt0Lkm4mYESRfyw9/LJdpDcNvxfAms4DUCGN3iEWO+3W4LAFbFptmDe+r2dofjgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
