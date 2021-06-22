<?php
// conexion a la base de datos
include "../database/database.php";
$db = new database();
$db->obtenerConexion();

switch ($_POST["opcion"]) {
  case "consulta":
    $a = $db->sAlumno($_POST["consulta"]);
    if(!empty($a)){
      for ($i = 0; $i < count($a); $i++) {
        $h = $db->rExamen($a[$i]["ficha"]);
        echo '
          <div class="alumno">
          <div class="boleta">' .
          $a[$i]["boleta"] .
          '</div>
          <div class="nombre">' .
          $a[$i]["paterno"] .
          " " .
          $a[$i]["materno"] .
          '</div>
          <div class="horario">'.$h[1].'</div>
          <div class="lab">LAB-'.$h[0].'</div>
          <a href="../php/update.php?id=' .
          $a[$i]["boleta"] .
          '"class="actualizar"
          ><i class="fas fa-pen"></i
          ></a>
          <a href="../php/actualizar.php" id=' .
          $a[$i]["boleta"] .
          ' class="eliminar"><i class="fas fa-trash"></i></a>
          </div>
          ';
      }
    }
    
    break;
  case "eliminar":
    $b = $db->rAlumno($_POST["id"]);
    $temp = $db->rExamen($b[16]);
    $db->uExamen($temp[0],$temp[1],$temp[2],$temp[3]- 1,$temp[4]);
    $a = $db->dAlumno($_POST["id"]);
    echo $a;
    break;
}
?>
