<?php
//Import PHPMailer classes into the global namespace

include "../database/database.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "src/PHPMailer.php";
require "src/SMTP.php";
require "src/Exception.php";

session_start();

if (empty($_SESSION["active"])) {
  header("location: ../pages/login_alumno.php");
}

// conexion a la base de datos

$db = new database();
$db->obtenerConexion();

$a = $db->rAlumno($_SESSION["idUser"]);

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Create a new PHPMailer instance
$mail = new PHPMailer();

$mail->SMTPDebug = 0;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages

//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "admequipo5proyectoweb@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "equipocinco5";

//Set who the message is to be sent from
$mail->setFrom("from@example.com", "ProyectoWEB-ESCOM_Equipo5");

//Set an alternative reply-to address
$mail->addReplyTo("replyto@example.com", "First Last");

//Set who the message is to be sent to
$mail->addAddress("{$a[11]}", "Hola {$a[1]} envio de PDF"); // <-- Para quien va el correo

//Set the subject line
$mail->Subject = "Envio de PDF {$a[1]} con boleta {$a[0]}"; //<<-asunto

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents("contenido.html"), __DIR__);
//$mail->msgHTML("<h1>Esto es una prueba con codigo HtML</h1>");

//Replace the plain text body with one created manually
$mail->AltBody = "Esto es una prueba SIN :c codigo HtML";

//Attach an image file
$mail->addAttachment("../storage/{$_SESSION["idUser"]}.pdf"); //<--Aqui se coloca el pdf

//send the message, check for errors
if (!$mail->send()) {
  $_SESSION["modal"] = "error";
  header("location: ../pages/alumno.php");
} else {
  $_SESSION["modal"] = "envio";
  header("location: ../pages/alumno.php");
}

?>
