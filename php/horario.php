<?php
// conexion a la base de datos
include "../database/database.php";

$count = 1;

$db = new database();
$db->obtenerConexion();

for ($i = 1; $i < 48; $i++) {
    $temp = $db->rExamen($i);
    if ($temp[3] < 25) {
      $horario = $i;
      $db->uExamen($temp[0], $temp[1], $temp[2], $temp[3] + 1, $temp[4]);
      break;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Horario</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/horario.css?v=<?php echo rand(); ?>" />
  </head>
  <body>

    <form action="" method="POST">
              <div class="form-floating mb-3">
                <input
                  type="number"
                  class="form-control"
                  id="ficha"
                  name="ficha"
                  placeholder="No. De Boleta"
                  required
                />
                <label for="ficha">No. Ficha</label>
              </div>
              <button class="submit" type="submit">Cambiar</button>
    </form>

    <div class="accordion">
      <div class="contentBx">
        <div class="label">HORA 1</div>
        <div class="content">
        <?php 
             for($i = 1; $i < 7 ;$i++){
                $temp = $db->rExamen($count);
                echo "<span>LAB-{$temp[0]} HORA-{$temp[1]} CUPO-{$temp[3]} FICHA-{$temp[4]}</span><br/>";
                $count++;
             } 
             ?>
        </div>
      </div>

      <div class="contentBx">
        <div class="label">HORA 2</div>
        <div class="content">
        <?php 
             for($i = 1; $i < 7 ;$i++){
                $temp = $db->rExamen($count);
                echo "<span>LAB-{$temp[0]} HORA-{$temp[1]} CUPO-{$temp[3]} FICHA-{$temp[4]}</span><br/>";
                $count++;
             } 
             ?>
        </div>
      </div>

      <div class="contentBx">
        <div class="label">HORA 3</div>
        <div class="content">
        <?php 
             for($i = 1; $i < 7 ;$i++){
                $temp = $db->rExamen($count);
                echo "<span>LAB-{$temp[0]} HORA-{$temp[1]} CUPO-{$temp[3]} FICHA-{$temp[4]}</span><br/>";
                $count++;
             } 
             ?>
        </div>
      </div>

      <div class="contentBx">
        <div class="label">HORA 4</div>
        <div class="content">
        <?php 
             for($i = 1; $i < 7 ;$i++){
                $temp = $db->rExamen($count);
                echo "<span>LAB-{$temp[0]} HORA-{$temp[1]} CUPO-{$temp[3]} FICHA-{$temp[4]}</span><br/>";
                $count++;
             } 
             ?>
        </div>
      </div>

      <div class="contentBx">
        <div class="label">HORA 5</div>
        <div class="content">
        <?php 
             for($i = 1; $i < 7 ;$i++){
                $temp = $db->rExamen($count);
                echo "<span>LAB-{$temp[0]} HORA-{$temp[1]} CUPO-{$temp[3]} FICHA-{$temp[4]}</span><br/>";
                $count++;
             } 
             ?>
        </div>
      </div>

      <div class="contentBx">
        <div class="label">HORA 6</div>
        <div class="content">
        <?php 
             for($i = 1; $i < 7 ;$i++){
                $temp = $db->rExamen($count);
                echo "<span>LAB-{$temp[0]} HORA-{$temp[1]} CUPO-{$temp[3]} FICHA-{$temp[4]}</span><br/>";
                $count++;
             } 
             ?>
        </div>
      </div>

      <div class="contentBx">
        <div class="label">HORA 7</div>
        <div class="content">
        <?php 
             for($i = 1; $i < 7 ;$i++){
                $temp = $db->rExamen($count);
                echo "<span>LAB-{$temp[0]} HORA-{$temp[1]} CUPO-{$temp[3]} FICHA-{$temp[4]}</span><br/>";
                $count++;
             } 
             ?>
        </div>
      </div>

      <div class="contentBx">
        <div class="label">HORA 8</div>
        <div class="content">
        <?php 
             for($i = 1; $i < 7 ;$i++){
                $temp = $db->rExamen($count);
                echo "<span>LAB-{$temp[0]} HORA-{$temp[1]} CUPO-{$temp[3]} FICHA-{$temp[4]}</span><br/>";
                $count++;
             } 
             ?>
        </div>
      </div>
    </div>

    <script>
      const accordion = document.getElementsByClassName("contentBx");

      for (let i = 0; i < accordion.length; i++) {
        accordion[i].addEventListener("click", function () {
          this.classList.toggle("active");
        });
      }
    </script>
  </body>
</html>
