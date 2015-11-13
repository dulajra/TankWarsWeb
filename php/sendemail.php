<?php

function sendEmail() {
    $to = $_POST['to'];
    $from = $_POST['from'];
    $replyto = $_POST['replyto'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];

    $headers = "From: " . $from . "\r\n" .
            'Reply-To: ' . $replyto . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $mail = mail($to, $subject, $message, $headers);

    $result = array();
    if ($mail) {
        $result['response'] = 1;
    } else {
        $result['response'] = 0;
    }
    echo json_encode($result);
}

sendEmail();
