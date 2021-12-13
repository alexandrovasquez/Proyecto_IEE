<?php
require('fpdf/fpdf.php');




class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de estudiante',0,0,'C');
    // Salto de línea
    $this->Ln(10);

    $this ->Cell(38,20,'Idestudiante',1,0,'c',0);
    $this ->Cell(38,20,'Idusuario',1,0,'c',0);
    $this ->Cell(38,20,'DNIapoderado',1,0,'c',0);
    $this ->Cell(38,20,'DNIestudiante',1,0,'c',0);
    $this ->Cell(38,20,'Nombres',1,0,'c',0);
    $this ->Cell(38,20,'Apellidos',1,0,'c',0);
    $this ->Cell(38,20,'Grado_seccion',1,0,'c',0);
    $this ->Cell(38,20,'Nivel',1,0,'c',0);
    $this ->Cell(38,20,'fecha',1,1,'c',0);


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require ('conexion.php');
$consulta= "SELECT*FROM estudiante";
$resultado= $conexion -> query($consulta);

$pdf = new FPDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
while ($row = $resultado-> fetch_assoc()) {
    $pdf ->Cell(38,20,$row['Idestudiante'],1,0,'c',0);
    $pdf ->Cell(38,20,$row['Idusuario'],1,0,'c',0);
    $pdf ->Cell(38,20,$row['DNIapoderado'],1,0,'c',0);
    $pdf ->Cell(38,20,$row['DNIestudiante'],1,0,'c',0);
    $pdf ->Cell(38,20,$row['Nombres'],1,0,'c',0);
    $pdf ->Cell(38,20,$row['Apellidos'],1,0,'c',0);
    $pdf ->Cell(38,20,$row['Grado_seccion'],1,0,'c',0);
    $pdf ->Cell(38,20,$row['Nivel'],1,0,'c',0);
    $pdf ->Cell(38,20,$row['fecha'],1,1,'c',0);

    # code...
}
$pdf->Output();
?>