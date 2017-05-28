<?php
	include("connect.php");
		$link=connectSkydancer();

    $dni = $_POST["dni"];
    $name = $_POST["izena"];
    $surname = $_POST["abi"];
    $birth = $_POST["data"];
    $address = $_POST["hel"];
    $phone = $_POST["tel"];
    $usn = $_POST["username"];
    $pwd = $_POST["passwd"];
    $pwd2 = $_POST["passwd2"];
    $email = $_POST["email"];
		if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]) {
			$secret = "6LfdKh8UAAAAAKqyE24sk9aj5Qv9VvxXo0vjdjpe";
			$ip = $_SERVER["REMOTE_ADDR"];

			$captcha = $_POST["g-recaptcha-response"];

			$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");

			$array = json_decode($result,TRUE);

			if ($array["success"]) {
				# code...


    mysqli_query($link,"insert into users(dni,name,surname,birth,address,phone,username,passwd,email) values ('$dni','$name','$surname','$birth','$address',$phone,'$usn','$pwd','$email')");

    mysqli_close($link);
		header("Location: ../index.php");
	}else{
header("Location: ../index.php?captcha=0");
	}

}else{


header("Location: ../index.php?captcha=0");
}
    ?>
