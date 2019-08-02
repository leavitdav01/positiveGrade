<?php

if($_POST["submit"]) {
    $recipient="leavitdav01@gmail.com";
    $subject="Message from Positive Grade Home Inspections";
    $sender=$_POST["sender"];
    $senderNumber=$_POST["senderNumber"];
    $senderEmail=$_POST["senderEmail"];
    $services=$_POST["services"];
    $message=$_POST["message"];

    $mailBody="Hello, I would like a home inspector to help me out. Here is my information: \n
    Name: $sender\n
    Phone Number: $senderNumber\n
    Email: $senderEmail\n
    $services\n\n
    Message:\n
    $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    /* Redirect browser */
    header("Location: otherHTML/thank.html");
 
    /* Make sure that code below does not get executed when we redirect. */
    exit;   
}