<?php
//    print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $error = '';
    if (trim($email) == '')
        $error = 'Please specify your E-mail';
    elseif (trim($message == ''))
        $error = 'Please enter a message';

    if ($error != '') {
        echo $error;
        exit;
    }


    $subject = "=?utf-8?B?".base64_encode($name)."?=";
    $headers = "From: $email\r\n Reply-to: $email\r\nContent-Type: text/html; charset=utf-8\r\n";
    mail('gis.glushkov55@gmail.com', $subject, $message, $headers);

    header('Location: /contactme.php');
?>