<?php
include "../database/database.php";

session_start();
if (!empty($_SESSION["admin"])) {
  session_destroy();
  session_start();
}

$alert = "";

if (!empty($_SESSION["active"])) {
  header("Location: ./alumno.php");
} else {
  if (!empty($_POST)) {
    if (empty($_POST["boleta"]) || empty($_POST["password"])) {
    } else {
      $db = new database();
      $db->obtenerConexion();
      $a = $db->rAlumno($_POST["boleta"]);

      if (
        !empty($a) &&
        $a[0] == $_POST["boleta"] &&
        $a[15] == $_POST["password"]
      ) {
        $_SESSION["active"] = true;
        $_SESSION["idUser"] = $a[0];
        header("Location: ./alumno.php");
      } else {
        $alert =
          '<div class="mt-1 alert alert-danger" role="alert"><span style="font-size: 12px;">Usuario y/o contraseña incorrectos</span></div>';
        session_destroy();
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../styles/index.css?v=<?php echo rand(); ?>" />
    <link rel="stylesheet" href="../styles/login.css?v=<?php echo rand(); ?>" />
  </head>
  <body>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <img src="../images/Slide/ESCOM1.jpeg" alt="" class="swiper-slide" />
        <img src="../images/Slide/ESCOM2.jpeg" alt="" class="swiper-slide" />
        <img src="../images/Slide/ESCOM3.jpeg" alt="" class="swiper-slide" />
        <img src="../images/Slide/ESCOM4.jpeg" alt="" class="swiper-slide" />
        <img src="../images/Slide/ESCOM5.jpeg" alt="" class="swiper-slide" />
      </div>
    </div>

    <i id="menu" class="menu fas fa-bars"></i>

    <div id="sidebar" class="sidebar">
      <i id="close" class="fas fa-times"></i>
      <a href="../index.html" class="contenido">Inicio</a>
      <a href="#" class="contenido">contenido2</a>
      <a href="#" class="contenido">contenido3</a>
      <a href="#" class="contenido">contenido4</a>
      <a href="../index.html" class="contenido">contenido5</a>
    </div>

    <div class="container">
      <img class="logoipn" src="../images/logoIpn.png" alt="" />
      <div class="card">
        <div class="box">
          <div class="content">
            <h2>IPN</h2>
            <h3>Alumno</h3>
            <form action="" method="POST">
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="boleta"
                  name="boleta"
                  placeholder="No. De Boleta"
                  required
                />
                <label for="boleta">No. Boleta</label>
              </div>
              <div class="form-floating">
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="Password"
                  required
                />
                <label for="password">Password</label>
              </div>
              <button class="submit" type="submit">Iniciar Sesion</button>
            </form>

            <a href="./form.php">Registrate</a>
            <?php if ($alert != "") {
              echo $alert;
            } ?>

          </div>
        </div>
      </div>
      <img class="logoescom" src="../images/logoEscom.png" alt="" />
    </div>

    <footer class="footer">
      <div class="icon">
        <i class="fab fa-facebook-f"></i>
      </div>
      <div class="icon">
        <i class="fab fa-twitter"></i>
      </div>
    </footer>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        autoplay: {
          delay: 3000,
        },
        loop: true,
      });
      const sidebar = document.getElementById("sidebar");
      const menu = document.getElementById("menu");
      const close = document.getElementById("close");

      menu.onclick = function () {
        sidebar.classList.toggle("active");
      };

      close.onclick = function () {
        sidebar.classList.remove("active");
      };
    </script>
  </body>
</html>