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
          <div id=' .
          $a[$i]["boleta"] .
          ' class="eliminar"><i id="2020630401" class="fas fa-trash"></i></div>
          </div>
          ';
      }
    }
    
    break;
  case "eliminar":
    $a = $db->dAlumno($_POST["id"]);
    echo $a;
    break;
}
?>
