<?php
if(isset( $_POST['email']))
$email = $_POST['email'];

$content="Portfolio email";
$recipient = "edd.bng@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>