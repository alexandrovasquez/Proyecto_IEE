<?php 
require_once("../db/conexion.php");
?>
<!DOCTYPE html>

<html>
<head>
<title>REGISTRO DE PAGO</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h2  class="p-2 mb-2 bg-danger text-white"><input type="submit" align="rigth" value="INICIO" class="btn btn-danger" onclick = "location='/ProyectoFinal/views/principal.php/'"/>REGISTRO DE PAGO</h2>
	

<div align="center" class="card card-container">

<form method="POST" action="index.php">


	<input size='30' type="text" name="txtfiltro" minlength="8" maxlength="8" placeholder="Buscar Estudiante" />
<input type="submit" value="buscar" name="btnfiltrar">

</select></label>
<br></br>
<label>Seleccion de DNI<select name="select_01">
<?php

if(isset($_POST['btnfiltrar'])){
	$filtro = $_POST['txtfiltro'];
$consultabuscar="select * from estudiante where DNIestudiante='$filtro' or Nombres like '$filtro%' or Apellidos like '$filtro%' or Nombres='$filtro' or Apellidos='$filtro'";

}else{
$consultabuscar="select * from estudiante where DNIestudiante=null";

}



$query = mysqli_query($conexion,$consultabuscar);



?>
<?php foreach ($query as $opciones):?>

<option value="<?php echo $opciones['DNIestudiante']?>"><?php echo $opciones['DNIestudiante']?>
</option> 

<?php endforeach?>
</select></label>

<table class="table table-hover">
	<thead class="thead-dark" align="center">
<tr>
<th>DNI Estudiante</th>
<th>Nombres</th>
<th>Apellidos</th>

</tr>
</thead>
<?php
$query = mysqli_query($conexion,$consultabuscar);
while ($res = mysqli_fetch_array($query)){

echo "<tr align='center'>";
echo "<td>$res[DNIestudiante]</td>";
echo "<td>$res[Nombres]</td>";
echo "<td>$res[Apellidos]</td>";
echo "</tr>";


}

?>



</table>



<br></br>
<label><b>Condicion de matricula</b></label><br>
 <table class="table table">
 <input type="radio"  name="matricula_v" value="Pagado"> Pagado   
<input type="radio"  name="matricula_v" value="No Pagado"> No Pagado<br>        
</table>


<table class="table table">
	<label><b>Condicion de pension</b></label><br>
<tr><td><input type="radio"  name="pension_v" value="Pagado-Abril"> Pagado-Abril</td>
<td><input type="radio"  name="pension_v" value="Pagado-Mayo"> Pagado-Mayo</td>
<td><input type="radio"  name="pension_v" value="Pagado-Junio"> Pagado-Junio</td>  
<td><input type="radio"  name="pension_v" value="Pagado-Julio"> Pagado-Julio</td>  
<td><input type="radio"  name="pension_v" value="Pagado-Agosto"> Pagado-Agosto</td> 
<td><input type="radio"  name="pension_v" value="Pagado-Septiembre"> Pagado-Septiembre</td>   
<td><input type="radio"  name="pension_v" value="Pagado-Octubre"> Pagado-Octubre</td>  
<td><input type="radio"  name="pension_v" value="Pagado-Noviembre"> Pagado-Noviembre</td>  
<td><input type="radio"  name="pension_v" value="Pagado-Diciembre"> Pagado-Diciembre</td>  
<td><input type="radio"  name="pension_v" value="No Pagado"> No Pagado</td></tr>

</table>
<input type="submit"  class="btn btn-info" name="insertapago" value="REGISTRAR PAGO" ><br></br>
<h7><b>CRONOGRAMOS DE PAGOS</b></h7>
<table class="table table-hover">
  <thead class="thead-danger">
<tr align="center" class="table-danger">
<th>MESES</th>
<th>Pension_INICIO</th>
<th>Pension_VENCE</th>
</tr>
</thead>
<tr align="center">
<td>Abril</td>
<td>02-04-yyyy</td>
<td>29-04-yyyy</td>
</tr>
<tr align="center">
<td>Mayo</td>
<td>02-05-yyyy</td>
<td>29-05-yyyy</td>
</tr>
<tr align="center">
<td>Junio</td>
<td>02-06-yyyy</td>
<td>29-06-yyyy</td>
</tr>
<tr align="center">
<td>Julio</td>
<td>02-07-yyyy</td>
<td>29-07-yyyy</td>
</tr>
<tr align="center">
<td>Agosto</td>
<td>02-08-yyyy</td>
<td>29-08-yyyy</td>
</tr>
<tr align="center">
<td>Septiembre</td>
<td>02-09-yyyy</td>
<td>29-09-yyyy</td>
</tr>
<tr align="center">
<td>Octubre</td>
<td>02-10-yyyy</td>
<td>29-10-yyyy</td>
</tr>
<tr align="center">
<td>Noviembre</td>
<td>02-11-yyyy</td>
<td>29-11-yyyy</td>
</tr>
<tr align="center">
<td>Diciembre</td>
<td>02-12-yyyy</td>
<td>15-12-yyyy</td>
</tr>
</table>



</div>
</form>
<br></br>
<h3><b>::HISTORIAL DE VALIDACIONES DE PAGO DE LOS ESTUDIANTES - IEE:: </b>  

</h3>

<table class="table table-hover">
	<thead class="thead-dark">
<tr>
<th>ID PAGO</th>
<th>DNI DEL ALUMNO</th>
<th>CONDICION DE MATRICULA</th>
<th>CONDICION DE PENSION</th>
<th>ACTUALIZAR validacion</th>
<th>ELIMINAR</th>
</tr>
</thead>
<?php 
$mostrar="SELECT * FROM pago";
$ejecutar=mysqli_query($conexion,$mostrar);
$i= 0;
while ($fila=mysqli_fetch_array($ejecutar)){
	$ip=$fila['Idpago'];
	$select_01=$fila['DNIestudiante'];
	$M=$fila['condicion_matricula'];
	$P=$fila['condicion_pension'];
	$i++;
?>	
<tr align="center">
<td><?php echo $ip; ?></td>

<td><?php echo $select_01; ?></td>
<td><?php echo $M; ?></td>
<td><?php echo $P; ?></td>
<td><a href="index.php?editarpago=<?php echo $ip;?>"class="btn btn-warning">ACTUALIZAR</a></td>
<td><a href="index.php?eliminarpago=<?php echo $ip;?>"class="btn btn-success">ELIMINAR</a></td>
</tr>
	<?php } ?>
  </table>


</body>
</html>