<?php
session_start();

$m = "";

if (empty($_SESSION["admin"])) {
  header("location: ./login_admin.php");
}

if (!empty($_SESSION["modal"])) {
  if ($_SESSION["modal"] == "update") {
    $m = '<div id="modal-contenedor" class="modal-contenedor active">
    <div class="modal-contenido">
      <i id="close-modal" class="fas fa-times"></i>
      <h3 class="modal-titulo">¡ACTUALIZASTE TUS DATOS!</h3>
      <div class="modal-cuerpo">
          En caso de quiera cambiar su informacio hay una opcion que lo permite.
      </div>
    </div>
</div>';
    $_SESSION["modal"] = "";
  }

  if ($_SESSION["modal"] == "success") {
    $m = '<div id="modal-contenedor" class="modal-contenedor active">
    <div class="modal-contenido">
      <i id="close-modal" class="fas fa-times"></i>
      <h3 class="modal-titulo">¡REGISTRO EXITOSO!</h3>
      <div class="modal-cuerpo">
          En caso de quiera cambiar su informacion hay una opcion que lo permite.
      </div>
    </div>
</div>';
    $_SESSION["modal"] = "";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Crud</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="../styles/crud.css?v=<?php echo rand(); ?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/funciones.js?v=<?php echo rand(); ?>"></script>
  </head>
  <body>
  <div id="sidebar" class="sidebar">
      <i id="close" class="fas fa-times"></i>
      <a href="#" class="contenido">contenido1</a>
      <a href="#" class="contenido">contenido2</a>
      <a href="#" class="contenido">contenido3</a>
      <a href="#" class="contenido">contenido4</a>
      <a href="../php/salir.php" class="contenido">Cerrar Sesión</a>
    </div>

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
        <a class="agregar-alumn" href="../php/create.php"
          ><i class="fas fa-plus-circle"></i
        ></a>
      </div>

      <div id="data"></div>


      <?php if ($m != "") {
        echo $m;
        $m = "";
      } ?>
    </div>
    <script>
      const sidebar = document.getElementById("sidebar");
      const menu = document.getElementById("toggle");
      const close = document.getElementById("close");

      const closem = document.getElementById("close-modal");
      const mcontenedor = document.getElementById("modal-contenedor");
      if(mcontenedor != null){
        closem.onclick = function () {
        mcontenedor.classList.remove("active");
      };
      }


      menu.onclick = function () {
        sidebar.classList.toggle("active");
      };

      close.onclick = function () {
        sidebar.classList.remove("active");
      };
    </script>
  </body>
</html>