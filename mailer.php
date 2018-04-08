<?php
include("/debugger/debug.php");

if (!empty($_POST["name1"]) && !empty($_POST["email1"]) && !empty($_POST["message1"])) {
  $to = "ivan_ram333@hotmail.com";
  $from = $_POST['email1'];
  $name = $_POST['name1'];
  $subject = "Tienes un mensaje de " . $name;
  $message = $_POST['message1'] . "\n\n" . $from;

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
  $headers .= 'From: <non-replay@iramirezs.com>' . "\r\n";

  mail($to,$subject,$message,$headers)
}
?>
