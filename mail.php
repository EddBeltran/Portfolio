<?php

if (isset($_POST['submit'])) {
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "edd.bng@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from a person" ".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: index.html");
}

 ?>