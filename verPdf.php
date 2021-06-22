<?php
//---BD
session_start();

if (empty($_SESSION["active"])) {
  header("location: ./login_alumno.php");
}

// conexion a la base de datos

include "./database/database.php";
$db = new database();
$db->obtenerConexion();

$a = $db->rAlumno($_SESSION["idUser"]);
$es = $db->rEscu($a[18]);
$en = $db->rEnti($a[19]);

$boleta = $a[0];
$nombre = $a[1];
$paterno = $a[2];
$materno = $a[3];
$fechaNacimiento = $a[4];
$genero = $a[5];
$curp = $a[6];
$calle = $a[7];
$colonia = $a[8];
$cp = $a[9];
$tel = $a[10];
$email = $a[11];
$idEs = $es[0];
$otros = $a[12]; //<-- ''
$idEn = $en[0];
$promedio = $a[13];
$opcion = $a[14];
$contraseña = strtoupper($paterno);
//--BD

require "fpdf/fpdf.php";

class PDF extends FPDF
{
  // Cabecera de página
  function Header()
  {
    // Logo
    $this->Image("images/Encabezado2.png", 10, 8, 190);
    // Arial bold 15
    $this->SetFont("Arial", "B", 13);
    // Movernos a la derecha
    $this->Cell(80);
    $this->Ln(20);
    $this->Ln(20);
    // Título
    $this->Cell(0, 10, "Ficha de Datos Personales", 0, 0, "C");
    // Salto de línea
    $this->Ln(15);
  }

  // Pie de página
  function Footer()
  {
    // Logo
    //$this->Image('pie1.png',10,8,190);
    //$this->Ln();
    $image1 = "images/pie2.png";
    $this->Cell(
      40,
      40,
      $this->Image($image1, -8, 260, 65, 45),
      0,
      0,
      "L",
      false
    ); //0,165,238,38
    //$this->Cell( 40, 40, $this->Image($image1, 0, $this->GetY(-15), 88), 0, 0, 'L', false );
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont("Arial", "I", 10);
    // Número de página
    $this->Cell(0, 10, "Pagina" . $this->PageNo() . "/{nb}", 0, 0, "C");
  }
}

// require 'cn.php'; si fuere recuperar los datos directamente de la BD de mysql pero no... (se crearía un otro archivo llamado cn.php con esto: ($mysqli = new mysqli("localhost", "root", "", "proyectoWEB");))
// $consultaTabla ="SELCT * FROM proyectoWEB"; //proyectoWEB es la tabla con toda la info de la BD  de proyectoWEB osea tiene mismo nombre?
// $resultadosTabla = $mysqli->query($consultaTabla);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial", "", 12);
$pdf->Ln();
$pdf->Cell(50, 10, "Fecha:  " . date("d-m-Y") . "", 0);

$pdf->Ln();
$pdf->Cell(40, 10, utf8_decode("Datos Personales:"));

$pdf->Cell(50, 10, utf8_decode("Boleta:   " . $boleta), 0, 2, "L", 0);

$pdf->Cell(50, 10, utf8_decode("Nombre:   " . $nombre), 0, 2, "L", 0);

$pdf->Cell(
  50,
  10,
  utf8_decode("Apellido paterno:   " . $paterno),
  0,
  2,
  "L",
  0
);

$pdf->Cell(
  50,
  10,
  utf8_decode("Apellido materno:   " . $materno),
  0,
  2,
  "L",
  0
);

$pdf->Cell(
  50,
  10,
  utf8_decode("Fecha de nacimiento:   " . $fechaNacimiento),
  0,
  2,
  "L",
  0
);

$pdf->Cell(50, 10, utf8_decode("Género:   " . $genero), 0, 2, "L", 0);

$pdf->Cell(50, 10, utf8_decode("Curp:   " . $curp), 0, 2, "L", 0);

$pdf->Ln();
$pdf->Cell(40, 10, utf8_decode("Contacto:"));

//$pdf->SetXY($pdf->GetX(), $pdf->GetY());
$pdf->Cell(20, 7, utf8_decode("Calle y número:   " . $calle), 0, 2, "L", 0);

$pdf->Cell(50, 10, utf8_decode("Colonia:   " . $colonia), 0, 2, "L", 0);

$pdf->Cell(50, 10, utf8_decode("Código postal:   " . $cp), 0, 2, "L", 0);

$pdf->Cell(50, 10, utf8_decode("Teléfono o celular:   " . $tel), 0, 2, "L", 0);

$pdf->Cell(50, 10, utf8_decode("Entidad Federatíva:   " . $idEn), 0, 2, "L", 0);

$pdf->Cell(
  50,
  10,
  utf8_decode("Correo electrónico:   " . $email),
  0,
  2,
  "L",
  0
);

$pdf->Ln();
$pdf->Cell(40, 10, utf8_decode("Datos Escolares:"));

$pdf->Cell(50, 10, utf8_decode("Procedencia:   " . $idEs), 0, 2, "L", 0);

$pdf->Cell(50, 10, utf8_decode("Promedio:   " . $promedio), 0, 2, "L", 0);

$pdf->Cell(50, 10, utf8_decode("ESCOM fue tu:   " . $opcion), 0, 2, "L", 0);

$pdf->Ln();
$pdf->Output("I", "./storage/{$boleta}.pdf");
$pdf->Close();
//$pdf->Output();
header("location: ./pages/alumno.php");
?>
