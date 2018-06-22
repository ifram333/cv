<?php
header('Content-Type: text/html; charset=UTF-8');

$servername = "127.0.0.1:3306";
$username = "root";
$password = "If01123581321*";
$database = "cv";

// $servername = "localhost";
// $username = "iramirez-user";
// $password = "Zz439653&tIsJ3";
// $database = "iramirez-cv";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  echo '<!DOCTYPE html>
  	<html>
  	  <head>
  	    <meta charset="utf-8"/>
  	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	    <title>Oops, algo ha salido mal</title>
  	    <meta name="author" content="Ivan Fernando Ramirez Sanclemente"/>
  	    <link rel="shortcut icon" href="favicon.ico">
  	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	    <link rel="stylesheet" href="stylesheets/error.css">
  	  </head>
  	  <body>
  	    <div class="page-wrap">
  	      <h1>Oops</h1>
  	      <h2>Algo ha salido mal</h2>
  	      <p>Estoy trabajando para corregir esto...</p>
  	    </div>

  	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  	  </body>
  	</html>';
  die();
}
?>
