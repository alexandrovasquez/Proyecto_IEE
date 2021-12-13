<?php
require('fpdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Image('../imagenes/logo.jpg',185,4,22);
    $this->Image('../imagenes/logo_blanco.png',28,40,340);

    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
 
    $this->Cell(60);
    $this->SetFont('Arial','B','C',18);

    $this->Cell(70,10,'REPORTE ESTUDIANTES MATRICULADOS',0,0,'C');
    $this->Ln(20);
      


    $this->Cell(18,10,utf8_decode('A continuacion se muestra el reporte de los estudiantes matriculados: '));

    // Salto de línea
    $this->Ln(10);
    $this->SetFont('Arial','B',8);

    $this ->Cell(10,10,'Id_Est',1,0,'C',0);
    $this ->Cell(10,10,'Id_Usu',1,0,'C',0);
    $this ->Cell(18,10,'DNI_Apod',1,0,'C',0);
    $this ->Cell(18,10,'DNI_Estd',1,0,'C',0);
    $this ->Cell(38,10,'Nombres',1,0,'C',0);
    $this ->Cell(32,10,'Apellidos',1,0,'C',0);
    $this ->Cell(18,10,'Grado_Sec',1,0,'C',0);
    $this ->Cell(20,10,'Nivel',1,0,'C',0);
    $this ->Cell(22,10,'Fecha',1,1,'C',0);


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

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while ($row = $resultado-> fetch_assoc()) {
    $pdf ->Cell(10,10,$row['Idestudiante'],1,0,'C',0);
    $pdf ->Cell(10,10,$row['Idusuario'],1,0,'C',0);
    $pdf ->Cell(18,10,$row['DNIapoderado'],1,0,'C',0);
    $pdf ->Cell(18,10,$row['DNIestudiante'],1,0,'C',0);
    $pdf ->Cell(38,10,$row['Nombres'],1,0,'C',0);
    $pdf ->Cell(32,10,$row['Apellidos'],1,0,'C',0);
    $pdf ->Cell(18,10,$row['Grado_seccion'],1,0,'C',0);
    $pdf ->Cell(20,10,$row['Nivel'],1,0,'C',0);
    $pdf ->Cell(22,10,$row['fecha'],1,1,'C',0);

    # code...
}
$pdf->Output();
?>