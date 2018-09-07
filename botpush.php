<?php



require "vendor/autoload.php";

$access_token = '4VvnANEszQSxXNdswT4lfJd6vB9TYnP5MgrVdXy+jXc3KRGPnjJbAj2z/rUr3sIuWY2qaddLR9vXriXW8UlHKhfkVvDN5wxKJQYPrGZUtPDIGYnEfynI5zFALpXNQGAg4z3/dfMQDdIER0ht004rdwdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '366cfb8e7caf9000f8f0ad7eca6c018b';

$pushID = 'Ufbbf0b16c2578d6c7df2b29034d63bc2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







