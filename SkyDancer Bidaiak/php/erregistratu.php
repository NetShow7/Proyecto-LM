<?php
	include("connect.php");
		$link=connectSkydancer();

    $dni = $_POST["dni"];
    $name = $_POST["izena"];
    $surname = $_POST["abizena"];
    $birth = $_POST["data"];
    $address = $_POST["hel"];
    $phone = $_POST["tel"];
    $usn = $_POST["username"];
    $pwd = $_POST["passwd"];
    $pwd2 = $_POST["passwd2"];
    $email = $_POST["email"];

    mysqli_query($link,"insert into users(dni,name,surname,birth,address,phone,username,passwd,email) values ('$dni','$name','$surname','$birth','$address',$phone,'$usn','$pwd','$email')");

    mysqli_close($link);
    header("Location: ../index.php");
    ?>
