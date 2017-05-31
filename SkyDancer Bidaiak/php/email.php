<?php
include_once 'connect.php';

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mensaje = trim($_POST['comments']);
    $address = "skydancerbidaiak@gmail.com";


    //incluimos la clase PHPMailer
    //require_once('php/PHPMailer/class.phpmailer.php');
    require_once('phpmail/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    //indico a la clase que use SMTP
    $mail->IsSMTP();
    //permite modo debug para ver mensajes de las cosas que van ocurriendo
    $mail->SMTPDebug = 2 ;
    //Debo de hacer autenticación SMTP
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    //indico el servidor de Gmail para SMTP
    $mail->Host = "smtp.gmail.com";
    //indico el puerto que usa Gmail
    $mail->Port = 465;
    //indico un usuario / clave de un usuario de gmail
    $mail->Username = "skydancerbidaiak@gmail.com";
    $mail->Password = "skypassword";
    $mail->SetFrom("$address", "$name");
    $mail->AddReplyTo("$email","$name");
    $mail->Subject = "Erabiltzaile komentarioa";
    $mail->MsgHTML("$mensaje");
    //indico destinatario

    $mail->AddAddress($address, "$name");
    if(!$mail->Send()) {
    header("Location: ../index.php?mail=false");
    } else {
    header("Location: ../index.php?mail=true");
    }

    //Redireccionamos a una pagina donde se visualizará que el mensaje se envio correctamente
    ?>
