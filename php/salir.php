<?php
session_start();

if (empty($_SESSION["admin"])) {
  session_destroy();
  header("location: ../pages/login_alumno.php");
} else {
  session_destroy();
  header("location: ../pages/login_admin.php");
}

?>
