<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'matteo.ceradini@gmail.com';
    $subject = $_POST['subject'];

    $body = "From: $name <br> E-Mail: $email <br> Message: <br> $message";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From:' . $email. "\r\n";
    $headers .= 'Cc:' . $email. "\r\n";

    mail($to, "New Message from Personal Website: $subject", $body, $headers);
?>