<?php
require_once("../db/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<title>REGISTRO DE ALUMNO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" href="../css/cabecera.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>

	<h2  class="p-2 mb-2 bg-danger text-white"><input type="submit" align="rigth" value="INICIO" class="btn btn-danger" onclick = "location='/ProyectoFinal/views/principal.php/'"/> REGISTRO DE ALUMNOS</h2>

	<input type="submit" align="rigth" value="NUEVO APODERADO" class="btn btn-danger" onclick = "location='/ProyectoFinal/controllers/apoderado.php/'"/>

<div align="center" class="card card-container">

<form method="POST" action="">

<label><h6><b>Bienvenido, POR FAVOR</b></h6></label>

<label>Elegir su ID estimado usuario <select name="select_01">

<?php

$consulta1="SELECT * FROM usuario";

	$ejecutar1=mysqli_query($conexion,$consulta1) or die (mysqli_error($conexion));
?>

<?php foreach ($ejecutar1 as $opciones):?>

<option value="<?php echo $opciones['Idusuario']?>"><?php echo $opciones['Idusuario']?></option>
<?php endforeach?>

	<input size='30' type="text"  minlength="8" maxlength="8" name="txtfiltro" placeholder="Buscar Apoderado" />
<input type="submit" value="buscar" name="btnfiltrar">

</select></label>
<br></br>
<label>Elegir el DNI del apoderado<select name="select_02">
<?php

if(isset($_POST['btnfiltrar'])){
	$filtro = $_POST['txtfiltro'];
$consultabuscar="select * from apoderado where DNIapoderado='$filtro' or Nombres like '$filtro%' or Apellidos like '$filtro%' or 
Nombres='$filtro' or Apellidos='$filtro'";

}else{
$consultabuscar="select * from apoderado where DNIapoderado=null";

}



$query = mysqli_query($conexion,$consultabuscar);

?>
<?php foreach ($query as $opciones):?>

<option value="<?php echo $opciones['DNIapoderado']?>"><?php echo $opciones['DNIapoderado']?>
</option> 

<?php endforeach?>
</select></label>

<table class="table table-hover">
	<thead class="thead-dark" align="center">
<tr>
<th>DNI Apoderado</th>
<th>Nombres</th>
<th>Apellidos</th>

</tr>
</thead>
<?php
$query = mysqli_query($conexion,$consultabuscar);
while ($res = mysqli_fetch_array($query)){

echo "<tr align='center'>";
echo "<td>$res[DNIapoderado]</td>";
echo "<td>$res[Nombres]</td>";
echo "<td>$res[Apellidos]</td>";
echo "</tr>";


}

?>
</table>
<label><b>::ADVERTENCIA</b><br><b>Registrar al apoderado en caso no se encuentre en el historial de apoderados</b></label>
<br></br>
<br />
<label><b>::REGISTRAR ALUMNOS</b></label><br>
<label>DNI estudiante</label>
<input type="text" name="DNIestudiante"  minlength="8" maxlength="8"   placeholder="DNI estudiante" />
<label>Nombres</label>
<input type="text" name="Nombres" placeholder="NOMBRES">
<label>Apellidos</label>
<input type="text" name="Apellidos" placeholder="APELLIDOS"><br></br>
<select name="Grado_seccion">
<option value="0">Selecciona el Grado_seccion</option>
<option value="3 years">3 years</option>
<option value="4 years">4 years</option>
<option value="5 years">5 years</option>
<option value="1ero A">1ero A</option>
<option value="1ero B">1ero B</option>
<option value="1ero C">1ero C</option>
<option value="2do A">2do A</option>
<option value="2do B">2do B</option>
<option value="2do C">2do C</option>
<option value="3ero A">3ero A</option>
<option value="3ero B">3ero B</option>
<option value="3ero C">3ero C</option>
<option value="4to A">4to A</option>
<option value="4to B">4to B</option>
<option value="4to C">4to C</option>
<option value="5to A">5to A</option>
<option value="5to B">5to B</option>
<option value="5to C">5to C</option>
<option value="6to A">6to A</option>
<option value="6to B">6to B</option>
<option value="6to C">6to C</option>
</select>
<select name="Nivel">
<option value="0">Selecciona el nivel academico</option>
<option value="inicial">inicial</option>
<option value="primaria">primaria</option>
<option value="secundaria">secundaria</option>
</select>
<label>Fecha de Matricula</label>
<input type="date" name="fecha" placeholder="FECHA MATRICULA">
<input type="submit" name="guardar"  class="btn btn-info" value="REGISTRAR ALUMNO">
</div>

</form>


<br />
<h3><b>::HISTORIAL DE LOS ESTUDIANTES MATRICULADOS::</b>   

</h3>
 <table class="table table-condensed">
 	<thead class="thead-dark">
<tr>
<th>ID ALUMNO</th>
<th>ID USUARIO</th>
<th>DNI APODERADO</th>
<th>DNI ESTUDIANTE</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>GRADO Y SECCION</th>
<th>NIVEL ACADEMICO</th>
<th>FECHA MATRICULA</th>
<th>ACTUALIZAR</th>
<th>EXPULSAR</th>
</tr>
</thead>

<?php 
$mostrar="SELECT * FROM estudiante";
$ejecutar=mysqli_query($conexion,$mostrar);
$i= 0;
while ($fila=mysqli_fetch_array($ejecutar)){
	$idal=$fila['Idestudiante'];
	$selec_01=$fila['Idusuario'];
	$selec_02=$fila['DNIapoderado'];
	$dni=$fila['DNIestudiante'];
	$nom=$fila['Nombres'];
	$app=$fila['Apellidos'];
	$ipro=$fila['Grado_seccion'];
	$niv=$fila['Nivel'];
	$fm=$fila['fecha'];
	$i++;
?>	
<tr align="center">
	
<td><font color="#17202A"><?php echo $idal; ?></font></td>
<td><font color="#17202A"><?php echo $selec_01; ?></font></td>
<td><font color="#17202A"><?php echo $selec_02; ?></font></td>
<td><font color="#17202A"><?php echo $dni; ?></font></td>
<td><font color="#17202A"><?php echo $nom; ?></font></td>
<td><font color="#17202A"><?php echo $app; ?></font></td>
<td><font color="#17202A"><?php echo $ipro; ?></font></td>
<td><font color="#17202A"><?php echo $niv; ?></font></td>
<td><font color="#17202A"><?php echo $fm; ?></font></td>
<td><a href="index.php?editaralumno=<?php echo $idal;?>"class="btn btn-warning">ACTUALIZAR</a></td>
<td><a href="index.php?eliminaralumno=<?php echo $idal;?>"class="btn btn-success">EXPULSAR</a></td>
</tr>
	<?php } ?>
  </table>

<a href="../reporte.php"> Descargar HISTORIAL DE ESTUDIANTES MATRICULADOS</a>

</body>


</html>