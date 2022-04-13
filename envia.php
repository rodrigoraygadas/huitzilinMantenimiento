<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/PHPMailer.php';

  $Nombre = $_POST['name'];
  $Email = $_POST['email'];
  $Telefono=$_POST["phone"];
  $Mensaje = $_POST['message'];
  $Bodytext = "Datos:\n 
		Nombre: ".$Nombre."\n
		Email: ".$Email."\n
		Telefono: ".$Telefono."\n
		Mensaje: ".$Mensaje;
 
	$mail = new PHPMailer();
	$mail->SetFrom( $Email, $Nombre);
	$mail->Subject   = 'Requerimiento de información en Huitzilin';
	$mail->CharSet   = 'UTF-8';
	$mail->Body      = $Bodytext;
	$mail->AddAddress('contacto@huitzilinservicios.com.mx');
	$mail->Send();
	echo "<script>alert('Mensaje Enviado');</script>";
	echo "<script>location.href='contacto.html'</script>";
?>

