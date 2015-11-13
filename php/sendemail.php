<?php

$_POST['name'] = "Dulaj Atapattu";
$_POST['phone'] = "0712755777";
$_POST['email'] = "dulaj@gmail.com";
$_POST['message'] = "Hello. This is a test.";

function sendEmail() {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "dulaj.atapattu.13@cse.mrt.ac.lk";
    $from = $email;
    $replyto = $email;
    $subject = "Tank Wars Customer Message";
    $message = $message;

    $headers = "From: " . $from . "\r\n" .
            'Reply-To: ' . $replyto . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    //$mail = mail($to, $subject, $message, $headers);

    $result = array();
    if ($mail) {
        $result['response'] = 1;
    } else {
        $result['response'] = 0;
    }
    echo json_encode($result);
}

sendEmail();
