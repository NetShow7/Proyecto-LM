<?php
session_start(); //Start or follow with a Session

if (!isset($_SESSION["number_pages"])) {
  $_SESSION["number_pages"] = 1;
}else {
  $_SESSION["number_pages"]++;
}
session_name("Eneko");
session_id("1");
?>

<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  echo "You have seen ".$_SESSION["number_pages"]." pages <br> <br>";
  echo "Session id: ".session_id()."<br>";
  echo "Session name: ".session_name()."<br>";
  echo "Session time: ".date("20y/m/d H:i:s");


  ?>
  <br>
  <br>
  <br>
  <a href="Counting_pages.php">Refresh it!</a>
  <br>
  <br>
  <br>
  <a href="Close_session.php">Close session</a>
</body>
</html>
