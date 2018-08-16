<?php


$access_token = 'JJR6wwXnDuV8KHUJ+eGu+Cvgfyxl9XsOQmlkFxuT5eidBkyt/676HGech3nWGAmO+r8HEt2soyaPVdsm6YLEXjv1ai6KUhWSJHmrhye+oQeMORSeW6u7NOqYpuSQ0QZMmedUEkFyl7SOswgkLj6M6AdB04t89/1O/w1cDnyilFU=';

$userId = 'U1f884b2f2427b6bf23852a289bd21c45';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

