<?php
include("dbconnect.php");
$link = DBconnect();
$result = mysqli_query($link,"select name, user_pw from users where user_id =".$_POST["id"]);
$row = mysqli_fetch_array($result);
if ($_POST["pw"] == $row["user_pw"] ) {
  session_start();
  $_SESSION["usuario"] = $_POST["id"];
  $sname = $row["name"];
  session_name($sname);
  header("Location: sessions_form.php");
}else {
  header("Location: sessions_form.php?mal=1");
}
 ?>
