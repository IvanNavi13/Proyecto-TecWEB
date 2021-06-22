<?php
// conexion a la base de datos
include "../database/database.php";
$db = new database();
$db->obtenerConexion();

$boleta = $_POST["boleta"];
$nombre = $_POST["nombre"];
$paterno = $_POST["paterno"];
$materno = $_POST["materno"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$genero = $_POST["genero"];
$curp = $_POST["curp"];
$calle = $_POST["calle"];
$colonia = $_POST["colonia"];
$cp = $_POST["cp"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$idEs = $_POST["escuela"];
$otros = $_POST["otros"]; //<-- ''
$idEn = $_POST["entidad"];
$promedio = $_POST["promedio"];
$opcion = $_POST["opcion"];
$contraseña = strtoupper($paterno);

$admin = $db->rAdmin("adminESCOM");
$admin[1];

$res = $db->uAlumno(
  $boleta,
  $nombre,
  $paterno,
  $materno,
  $fechaNacimiento,
  $genero,
  $curp,
  $calle,
  $colonia,
  $cp,
  $tel,
  $email,
  $otros,
  $promedio,
  $opcion,
  $contraseña,
  "01",
  $admin[1],
  $idEs,
  $idEn
);

session_start();
if (!empty($_SESSION["admin"])) {
  if ($res) {
    $_SESSION["modal"] = "update";
    header("Location: ../pages/crud_admin.php");
  } else {
    echo $res;
  }
} else {
  if ($res) {
    $_SESSION["modal"] = "update";
    header("Location: ../pages/alumno.php");
  } else {
    echo $res;
  }
}

?>
