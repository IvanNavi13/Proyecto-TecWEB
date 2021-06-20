<?php
     // conexion a la base de datos  
    include( './database/database.php');
    $db = new database();
    $db->obtenerConexion();
    $a = $db->rAlumno($_POST['boleta']);
    
    $boleta  = $_POST['boleta'];
    $nombre  = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $fechaNacimiento  = $_POST['fechaNacimiento'];
    $genero  = $_POST['genero'];
    $curp    = $_POST['curp'];
    $calle   = $_POST['calle'];
    $colonia = $_POST['colonia'];
    $cp      = $_POST['cp'];
    $tel     = $_POST['tel'];
    $email   = $_POST['email']; 
    $idEs    = $_POST['escuela'];
    $otros   = $_POST['otros'];   //<-- ''
    $idEn    = $_POST['entidad'];
    $promedio = $_POST['promedio'];
    $opcion  = $_POST['opcion'];
    $contraseña = strtoupper($paterno);
	
	
    $admin = $db->rAdmin('adminESCOM');
    $admin[1];
    

    if(!empty($a)){
     $m = $db->uAlumno($boleta, $nombre, $paterno, $materno, $fechaNacimiento, $genero, $curp, $calle,
              $colonia, $cp, $tel, $email, $otros, $promedio, $opcion, $contraseña, "01",
              $admin[1], $idEs, $idEn);
    }
    else{
	    $m = $db->cAlumno($boleta, $nombre, $paterno, $materno, $fechaNacimiento, $genero, $curp, $calle,
              $colonia, $cp, $tel, $email, $otros, $promedio, $opcion, $contraseña, "01",
              $admin[1], $idEs, $idEn);
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
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
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/registro.css" />
  </head>
  <body>
    <i id="menu" class="menu fas fa-bars"></i>

    <div id="sidebar" class="sidebar">
      <i id="close" class="fas fa-times"></i>
      <a href="#" class="contenido">contenido1</a>
      <a href="#" class="contenido">contenido2</a>
      <a href="#" class="contenido">contenido3</a>
      <a href="#" class="contenido">contenido4</a>
      <a href="#" class="contenido">contenido5</a>
    </div>

    <div class="container">
      <img class="logoipn" src="./images/logoIpn.png" alt="" />
      <div class="card">
        <div class="box">
          <div class="content">
            <h2>IPN</h2>
            <h3>Alumno</h3>
            <p>
              Favor de verificar que la informacion que proporcionate sea
              correcta
            </p>
            <a href="./database/formupdate.php">ACTUALIZAR DATOS</a>
            <a href="#">REENVIAR PDF</a>
            <a href="#">ABRIR PDF</a>
          </div>
        </div>
      </div>

      <img class="logoescom" src="./images/logoEscom.png" alt="" />
    </div>

   <?php echo $m ?>

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

      closem.onclick = function () {
        mcontenedor.classList.remove("active");
      };

      menu.onclick = function () {
        sidebar.classList.toggle("active");
      };

      close.onclick = function () {
        sidebar.classList.remove("active");
      };
    </script>
  </body>
</html>
