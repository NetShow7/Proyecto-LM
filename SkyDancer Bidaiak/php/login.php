<?php
session_start();
include ("connect.php");
$link=connectSkydancer();
$result=mysqli_query($link, "select * from users where username='".$_POST["username"]."'");
$pw=mysqli_fetch_array($result);
if ($pw["passwd"]==$_POST["passwd"]) {
  $_SESSION["loged"] = "yes";
  $_SESSION["id"] = $pw["id"];
  header("Location: ..\index.php");
}else {
  header("Location: ..\index.php?login=0");
}
 ?>
