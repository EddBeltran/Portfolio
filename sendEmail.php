<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = "Portfolio Email";
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo  = "hello@eduardobeltran.net";
    $headers = "From: " . $mailFrom. "\r\n";  
    $headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";

    $txt = $message . "\n\n From: ". $name;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?emailsent#form");

}
?>