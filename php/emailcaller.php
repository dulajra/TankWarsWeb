<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$message = 'Name: ' . $name . '%0APhone: ' . $phone . '%0A%0A' . $message;
$to = 'envisionlabz@gmail.com';
$subject = "Tank Wars Cutomer Message";
$from = 'noreply@tankwars.com';
$replyto = $email;

function get_url($request_url) {    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $request_url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

$url = "www.quarksis.com/sendemail.php?to=" . $to . "&name=" . $name . "&email=" . $email . "&subject=" . $subject . "&message=" . $message . "&from=" . $from . "&replyto=" . $replyto;
//$url = "http://www.quarksis.com/mailerAPI/mailer.php?ty=send&un=envisionlabz&pw=Envisionlabz@1234&msg=" . $message . "&sub=Tank Wars Customer Message&name=" . $name . "&cli=" . $email;
$url = str_replace(' ', '%20', $url);
$url = str_replace("<br>", '%0A', $url);
$response = get_url($url);
echo json_encode($response);
