<form action="" method="post">
    <input type="text" name="message">
    <input type="submit" name="submit">
</form>


<?php
    if(isset($_POST['submit']))
    {
        $apiToken = "7058391968:AAGZaNkOjzzXClA1QT3l0QzIHfSkLuo-Ijg";
        $data = [
            'chat_id' => '@webapitesting_error575', 
            'text' => $_POST['message']
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );    
    }
?>