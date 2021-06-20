<?php
     // conexion a la base de datos  
    include( './database.php');
    $db = new database();
    $db->obtenerConexion();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crud</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="../js/crud.js"></script>
    <link rel="stylesheet" href="../styles/crud.css" />
  </head>
  <body>
    <div class="header">
      <i id="toggle" class="fas fa-bars"></i>
      <div class="search-box">
        <input id="search" type="text" />
        <i class="fas fa-search"></i>
      </div>
    </div>

    <div class="container">
      <div class="titulo"><h1>ADMINISTRADOR DE ALUMNOS</h1></div>

      <div class="agregar">
        <div class="titulo">AGREGAR ALUMNO</div>
        <a class="agregar-alumn" href="../pages/form.html"><i class="fas fa-plus-circle"></i></a>
      </div>

      <div id="data"></div>
    </div>
  </body>
</html>





