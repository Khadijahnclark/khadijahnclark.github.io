<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "khadijahnclark@gmail.com";
$subject = "Mail From Website";

$headers = "From: " .$name. "\r\n" .
"CC: knclark@gmail.com";

$txt = "You have recieved an email from" .$name ."\r\nEmail: ".$email ."\r\n
    message: ". $message;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header('Location:thankyou.html');


?>