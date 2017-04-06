<?php
include ("connect.php");
$link=connectSkydancer();
$result=mysqli_query($link, "select id from Skydancer where id=".$_POST["userid"]);
$pw=mysqli_fetch_array($result);
if ($pw["user_pw"]==$_POST["passwd"]) {
  header("Location: welcome.php");
}else {
  header("Location: notloged.html");
}
 ?>
