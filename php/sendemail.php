<?php

if (is_ajax()) {
    if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
        $action = $_POST["action"];
        switch ($action) { //Switch case for value of action
            case "success": todo_function();
                break;
        }
    }
}

//Function to check if the request is an AJAX request
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function todo_function() {
    $result = sendEmail("envisionlabz@gmail.com");
    echo json_encode($result);
}

function sendEmail($to) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $from = $email;
    $replyto = $email;
    $subject = "Tank Wars Customer Message";

    $headers = "From: " . $from . "\r\n" .
            'Reply-To: ' . $replyto . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $mail = mail($to, $subject, $message, $headers);
    return $mail;
}
