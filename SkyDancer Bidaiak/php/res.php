<?php
session_start();
include ("connect.php");
$link=connectSkydancer();
$userid =$_SESSION["id"];
$flightid = $_GET["id"];
mysqli_query($link, "INSERT INTO reserv (u_id,f_id) VALUES ($userid,$flightid)");
mysqli_query($link, "UPDATE FLIGHTS SET tickets_sold = tickets_sold+1 WHERE id = $flightid");
header("Location: ..\index.php?res");
 ?>
