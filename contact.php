<?php

if($_POST["submit"]) {
    $recipient="ktmblanketsindia@gmail.com";
    $subject="Query Alert";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $senderCountry=$_POST["country"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nCountry: $senderCountry\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent. </p>";
}

?>