<?php

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('w0h1+qugG7eK9irRuhSxXlwSbPtFvL+d8bYGex2B0Gyk45uhNUJ7h2ukhQ5f6DqRVRmvtKAO4cjOyGs1YqFJXKAGDslIySYz/oyxlRhMVFYdIQ/fE9Yfbq3rwlJ60pyPSEmvwEgcjas4V3fBQ2eg9QdB04t89/1O/w1cDnyilFU=');
    $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '47368e7e23bd0ac6915e085105e2d330']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('<to>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

?>
