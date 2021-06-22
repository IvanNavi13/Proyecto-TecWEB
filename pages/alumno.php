<?php
session_start();
$m = "";

if (empty($_SESSION["active"])) {
  header("location: ./login_alumno.php");
}

if (!empty($_SESSION["modal"])) {
  if ($_SESSION["modal"] == "update") {
    $m = '<div id="modal-contenedor" class="modal-contenedor active">
    <div class="modal-contenido">
      <i id="close-modal" class="fas fa-times"></i>
      <h3 class="modal-titulo">¡ACTUALIZASTE TUS DATOS!</h3>
      <div class="modal-cuerpo">
          En caso de quiera cambiar su informacion hay una opcion que lo permite,
          de lo contrario puede obtner el pdf con toda la información
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
          En caso de quiera cambiar su informacion hay una opcion que lo permite,
          de lo contrario puede obtner el pdf con toda la información
      </div>
    </div>
</div>';
    $_SESSION["modal"] = "";
  }

  if ($_SESSION["modal"] == "error") {
    $m = '<div id="modal-contenedor" class="modal-contenedor active">
    <div class="modal-contenido">
      <i id="close-modal" class="fas fa-times"></i>
      <h3 class="modal-titulo">¡ALGO SALIÓ MAL!</h3>
      <div class="modal-cuerpo">
          Verifique su informacio o pongase en contancto el el personal de la escuela.
      </div>
    </div>
</div>';
    $_SESSION["modal"] = "";
  }

  if ($_SESSION["modal"] == "envio") {
    $m = '<div id="modal-contenedor" class="modal-contenedor active">
    <div class="modal-contenido">
      <i id="close-modal" class="fas fa-times"></i>
      <h3 class="modal-titulo">¡ENVIO EXITOSO!</h3>
      <div class="modal-cuerpo">
          Revise su correo donde encontrara el pdf con toda su informacion.
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumno</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../styles/index.css?v=<?php echo rand(); ?>" />
  </head>
  <body>
    <i id="menu" class="menu fas fa-bars"></i>

    <div id="sidebar" class="sidebar">
      <i id="close" class="fas fa-times"></i>
      <a href="#" class="contenido">contenido1</a>
      <a href="#" class="contenido">contenido2</a>
      <a href="#" class="contenido">contenido3</a>
      <a href="#" class="contenido">contenido4</a>
      <a href="../php/salir.php" class="contenido">Cerrar Sesión</a>
    </div>

    <div class="container">
      <img class="logoipn" src="../images/logoIpn.png" alt="" />
      <div class="card">
        <div class="box">
          <div class="content">
            <h2>IPN</h2>
            <h3>Alumno</h3>
            <p>
              Favor de verificar que la informacion que proporcionate sea
              correcta
            </p>
            <a href="./update_alumno.php?id=<?php echo $_SESSION[
              "idUser"
            ]; ?>">ACTUALIZAR DATOS</a>
            <a href="../generaPdf.php">REENVIAR PDF</a>
            <a href="../verPdf.php">ABRIR PDF</a>
          </div>
        </div>
      </div>

      <img class="logoescom" src="../images/logoEscom.png" alt="" />
    </div>

    <?php if ($m != "") {
      echo $m;
      $m = "";
    } ?>

    <footer class="footer">
      <div class="icon">
        <i class="fab fa-facebook-f"></i>
      </div>
      <div class="icon">
        <i class="fab fa-twitter"></i>
      </div>
    </footer>
    <script>
      const sidebar = document.getElementById("sidebar");
      const menu = document.getElementById("menu");
      const close = document.getElementById("close");

      
      const closem = document.getElementById("close-modal");
      const mcontenedor = document.getElementById("modal-contenedor");
      if(closem != null){
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

