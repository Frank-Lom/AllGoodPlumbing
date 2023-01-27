<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'superphil99@yahoo.com';
    $subject = 'Website Inquiry - All Good Plumbing';
    $message = 'Name: ' . $name . "\n" . 'Phone: ' . $phone . "\n" . 'Email: ' . $email . "\n" . 'Message: ' . $message;

    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        $success = "Check your email to reset your password";
    } else {
        $error = "There was a problem processing your request";
    }

    header('Location: index.html');
?>