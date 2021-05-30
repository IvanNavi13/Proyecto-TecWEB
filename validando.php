<?php
    /*  conexion a la base de datos  
    require( './database/database.php');
    //$query = "CALL phpescom.sp_insert_usuario('$nombre','$paterno','$materno','$nacimiento','$curp','$sexo','$clave')";
    $db = new database();
    $db->obtenerConexion();
    $result = $db->create( $query );
    */

    $boleta = $_POST['boleta'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $fecha = $_POST['fecha'];
    $genero = $_POST['genero'];
   // $masculino = $_POST['masculino'];
   // $femenino = $_POST['femenino'];
   // $otro = $_POST['otro'];
    $curp = $_POST['curp'];
    $calle = $_POST['calle'];
    $colonia = $_POST['colonia'];
    $cp = $_POST['cp'];
    $tel = $_POST['tel'];
    $email = $_POST['email']; 
    $escuela = $_POST['escuela'];
    $otros = $_POST['otros'];
    $entidad = $_POST['entidad'];
    $promedio = $_POST['promedio'];
    $opcion = $_POST['opcion'];
    $contraseña = strtoupper($paterno);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
  </head>
  <body>

    <?php 
        echo "<h1>Hola $boleta</h1>";
        echo "<h1>Hola $nombre</h1>";
        echo "<h1>Hola $paterno</h1>";
        echo "<h1>Hola $materno</h1>";
        echo "<h1>Hola $fecha</h1>";
        echo "<h1>Hola $genero</h1>";
        echo "<h1>Hola $curp</h1>";
        echo "<h1>Hola $calle</h1>";
        echo "<h1>Hola $colonia</h1>";
        echo "<h1>Hola $cp</h1>";
        echo "<h1>Hola $tel</h1>";
        echo "<h1>Hola $email</h1>";
        echo "<h1>Hola $escuela</h1>";
        echo "<h1>Hola $otros</h1>";
        echo "<h1>Hola $entidad</h1>";
        echo "<h1>Hola $promedio</h1>";
        echo "<h1>Hola $opcion</h1>";
        echo "<h1>La contraseña es: $contraseña</h1>";

        /* 
        if( $result )
          echo "<p>Registro éxitoso</p>";
        else
          echo "<p>No se ha insertado</p>";
        */
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>