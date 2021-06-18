<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('images/ESCOM.png',10,8,33);
    $this->Image('images/IPN.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(150,10,'Formulario del alumno',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

// require 'cn.php'; si fuere recuperar los datos directamente de la BD de mysql pero no... (se crearía un otro archivo llamado cn.php con esto: ($mysqli = new mysqli("localhost", "root", "", "proyectoWEB");))
// $consultaTabla ="SELCT * FROM proyectoWEB"; //proyectoWEB es la tabla con toda la info de la BD  de proyectoWEB osea tiene mismo nombre?
// $resultadosTabla = $mysqli->query($consultaTabla);


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(50,10,utf8_decode('Boleta:   '.$_POST['boleta'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Nombre:   '.$_POST['nombre'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Apellido paterno:   '.$_POST['paterno'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Apellido materno:   '.$_POST['materno'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Fecha de nacimiento:   '.$_POST['fechaNacimiento'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Género:   '.$_POST['genero'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Curp:   '.$_POST['curp'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Contacto:'));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Calle y número:   '.$_POST['calle'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Colonia:   '.$_POST['colonia'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Calle y número:   '.$_POST['calle'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Código postal:   '.$_POST['cp'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Teléfono o celular:   '.$_POST['tel'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Entidad Federatíva:   '.$_POST['entidad'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Correo electrónico:   '.$_POST['email'],0,2,'L',0));
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Procedencia:   '.$_POST['escuela'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('Promedio:   '.$_POST['promedio'],0,2,'L',0));
$pdf->Ln();
$pdf->Cell(50,10,utf8_decode('ESCOM fue tu:   '.$_POST['opcion'],0,2,'L',0));
$pdf->Ln();

$pdf->Output();

?>


