<?php


    $recipient="ktmblanketsindia@gmail.com";
    $subject="Query Alert";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $senderCountry=$_POST["country"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nCountry: $senderCountry\n\n$message";
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: ". $sender. "\r\n";
    $headers .= "Reply-To: ". $sender. "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "X-Priority: 1" . "\r\n";
    mail('ktmblanketsindia@gmail.com', $subject, $mailBody, $headers);
    echo '<p>Your mail has been sent!</p>';


?>