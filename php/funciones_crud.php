<?php
// conexion a la base de datos
include "../database/database.php";
$db = new database();
$db->obtenerConexion();

switch ($_POST["opcion"]) {
  case "consulta":
    $a = $db->sAlumno($_POST["consulta"]);
    for ($i = 0; $i < count($a); $i++) {
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
        <div class="horario">7:00 AM</div>
        <div class="lab">LAB-12</div>
        <a href="../php/update.php?id=' .
        $a[$i]["boleta"] .
        '"class="actualizar"
        ><i class="fas fa-pen"></i
        ></a>
        <div id=' .
        $a[$i]["boleta"] .
        ' class="cambiar"><i class="fas fa-calendar-week"></i></div>
        <div id=' .
        $a[$i]["boleta"] .
        ' class="eliminar"><i id="2020630401" class="fas fa-trash"></i></div>
        </div>
        ';
    }
    break;
  case "eliminar":
    $a = $db->dAlumno($_POST["id"]);
    echo $a;
    break;
}
?>
