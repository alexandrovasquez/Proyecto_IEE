<!DOCTYPE html>
<html lang="es">
<head>

<title>:::: ESTADO DE PAGO DE ESTUDIANTE ::::</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
 
<h2  class="p-2 mb-2 bg-danger text-white">Estado de Pago del Estudiante<input type="submit" style="margin-left:850px; border:none" align="rigth" value="SALIR" class="btn btn-danger" onclick = "location='/ProyectoFinal/index.php/'"/></h2>
 

<div align="center" class="card card-container">
	
<form method="POST" action="">

	<input size='30' type="text" name="txtfiltro" placeholder="comprobar identidad"/>
<input type="submit" value="buscar" name="btnfiltrar">




<?php
require_once("../db/conexion.php");




if(isset($_POST['btnfiltrar'])){
	$filtro = $_POST['txtfiltro'];
$consultabuscar="select estudiante.DNIapoderado, estudiante.DNIestudiante, estudiante.Nombres, estudiante.Apellidos, estudiante.Grado_seccion, estudiante.Nivel, pago.condicion_matricula, pago.condicion_pension FROM estudiante
INNER JOIN pago ON estudiante.Idestudiante=pago.Idpago where DNIapoderado='$filtro'"; 


} 

else{
$consultabuscar="select estudiante.DNIapoderado, estudiante.DNIestudiante, estudiante.Nombres, estudiante.Apellidos, estudiante.Grado_seccion, estudiante.Nivel ,pago.condicion_matricula, pago.condicion_pension FROM estudiante
INNER JOIN pago ON estudiante.Idestudiante=pago.Idpago where DNIapoderado= null";

}



$query = mysqli_query($conexion,$consultabuscar);



?>


<table class="table table-hover">
	<thead class="thead-dark" align="center">
<tr>


<th>DNI estudiante</th>
<th>Nombres del estudiante</th>
<th>Apellidos del estudiante</th>
<th>Grado y Seccion</th>
<th>Nivel Academico</th>
<th>Condicion de matricula</th>
<th>Condicion de pension</th>

</tr>
</thead>
<?php
$query = mysqli_query($conexion,$consultabuscar);
while ($res = mysqli_fetch_array($query)){

echo "<tr align='center'>";


echo "<td>$res[DNIestudiante]</td>";
echo "<td>$res[Nombres]</td>";
echo "<td>$res[Apellidos]</td>";
echo "<td>$res[Grado_seccion]</td>";
echo "<td>$res[Nivel]</td>";
echo "<td>$res[condicion_matricula]</td>";
echo "<td>$res[condicion_pension]</td>";
echo "</tr>";


}

?>

</table>
</div>
</form>
</body>
</html>