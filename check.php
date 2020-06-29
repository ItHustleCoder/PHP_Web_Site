<?php
    //print_r($_POST);
    $email = $_POST["email"];
    $message = $_POST["message"];
    $error = '';
    if(trim($email == ''))
        $error = 'email not found';
        else if(trim($message)=='')
            $error = 'Write youre message';
        else if(strlen($message) < 10)
            $error = "The message must have a minimum number of words : 10";

    if($error != '') {
        echo $error;
        exit;
    }
    $subject = "=?utf-8?B?".base64_encode("Testing message"). "?=";
    $headers = "From: $email\r\nReplay-to: $email\r\nConten-type: text/html;charset=utf-8\r\n";
    mail('admin@ithustlecode.com', $subject,$headers);

    header('Location: /project/about.php');


?>