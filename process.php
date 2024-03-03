<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "terry.james.stannard@gmail.com";
    $header = "Form $email";

    if(mail($to,$subject,$message,$header)){

        echo "Email Sent";
    }else{
        echo "Email sending failed";
    }
}

?>