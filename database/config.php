<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "If01123581321*";
$database = "cv";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {

  header("Location: error.html");
  die();
}
?>
