<?php

$apiToken = "7058391968:AAGZaNkOjzzXClA1QT3l0QzIHfSkLuo-Ijg";

$data = [
    'chat_id' => '@webapitesting_error575', //-1001934360723
    'text' => 'Hello world!'
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
// Do what you want with result

?>