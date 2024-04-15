<?php

    $content = '';
    foreach ($_POST as $key => $value) {
        if($value){
            $content .= "<b>$key</b>: <i>$value</i>\n";
        }
    }
    if(trim($content)){
        $content = "<b>Message from Site:</b>\n".$content;
        $apiToken = "7058391968:AAGZaNkOjzzXClA1QT3l0QzIHfSkLuo-Ijg";
        $data = [
            'chat_id' => '@webapitesting_error575',
            'text' => $content,
            'parse_mode' => 'HTML'
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
    }
?>