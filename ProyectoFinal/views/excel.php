<?php

	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Fechas_Ingreso.csv"');
?>

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