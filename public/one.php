<?php

$botApiToken = '6285598536:AAG4BiGzBEI7pU3kv_S57UtNuwHAHulE_-M';
$channelId = '5627477315';
$text = 'Hello, I am from PHP file_get_contents!';
$query = http_build_query([
    'chat_id' => $channelId,
    'text' => $text,
]);
$url = "https://api.telegram.org/bot{$botApiToken}/sendMessage?{$query}";
file_get_contents($url);
