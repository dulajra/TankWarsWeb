<?php

function sendEmail($to) {
    $name = "Madhawa";
    $phone = "012";
    $email = "admin@envisiongames.tk";
    $message = "Message";

    $from = $email;
    $replyto = $email;
    $subject = "Tank Wars Customer Message";

    $headers = "From: " . $from . "\r\n" .
            'Reply-To: ' . $replyto . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $mail = mail($to, $subject, $message, $headers);
    echo json_encode($mail);
}

sendEmail("dulaj.atapattu.13@cse.mrt.ac.lk");
sendEmail("madhawa.13@cse.mrt.ac.lk");
?>