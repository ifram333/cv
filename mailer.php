<?php
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if (isset($_POST["submit"])) {

  /*Validación del nombre*/
  if (empty($_POST["name"])) {
    $nameErr = "Ingresa tu nombre";
  }
  else {
    if (!preg_match("/^[a-zA-Z ñáéíóúü]+$/",$name)) {
      $nameErr = "Oops, no creo que tu nombre tenga números o caracteres especiales";
    }
  }

  /*Validación del correo*/
  if (empty($_POST["email"])) {
    $emailErr = "Ingresa tu correo electrónico";
  }
  else {
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",$email)) {
      $emailErr = "Oops, el correo electrónico no parece ser válido";
    }
  }

  /*Validación del mensaje*/
  if (empty($_POST["message"])) {
    $emailErr = "No olvides el mensaje";
  }

  if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
    $to = "ivan_ram333@hotmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Tienes un mensaje de " . $name;
    $message = $_POST['message'] . "\n\n" . $from;

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
    $headers .= 'From: <non-replay@iramirezs.com>' . "\r\n";

    mail($to,$subject,$message,$headers);
  }

}
?>
