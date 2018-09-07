<?php



require "vendor/autoload.php";

$access_token = 'SitF5yNqyvmV2Pki4tQaR1ROByP+WsAEBjB8HZxExso59O/FLkbBXbORMe9NQIlWWY2qaddLR9vXriXW8UlHKhfkVvDN5wxKJQYPrGZUtPA77RJ9HjIsAHYj1NHlVXVsQUaQrwWYK/w+h+0/XWcO3gdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '9096d6a4b40970f6f302a597ff4366fe';

$pushID = 'Ufbbf0b16c2578d6c7df2b29034d63bc2';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







