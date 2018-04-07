<?php
include("config.php");

$result=mysqli_query($conn, "select name, knowledge from skill");

while($data = mysqli_fetch_row($result))
{
  echo "<div class='col s12 m12 l6'>";
  echo "<p class='skill-name'>$data[0]</p>";
  echo "<div class='grey lighten-2'>";
  echo "<div class='skill-bar grey darken-2 center-align' style='width:$data[1]%''>$data[1]%</div>";
  echo "</div>";
  echo "</div>";
}
?>
