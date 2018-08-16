<?php



require "vendor/autoload.php";

$access_token = 'JJR6wwXnDuV8KHUJ+eGu+Cvgfyxl9XsOQmlkFxuT5eidBkyt/676HGech3nWGAmO+r8HEt2soyaPVdsm6YLEXjv1ai6KUhWSJHmrhye+oQeMORSeW6u7NOqYpuSQ0QZMmedUEkFyl7SOswgkLj6M6AdB04t89/1O/w1cDnyilFU=';

$channelSecret = '63e04d8f172bc2d325ac3fc31e1bf2b3';

$pushID = 'U1f884b2f2427b6bf23852a289bd21c45';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







