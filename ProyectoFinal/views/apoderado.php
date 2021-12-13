<?php
require_once("../db/conexion.php");
?>
<!DOCTYPE html>

<html>
<head>
<title>REGISTRAR APODERADO</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h2  class="p-2 mb-2 bg-danger text-white"><input type="submit" align="rigth" value="INICIO" class="btn btn-danger" onclick = "location='/ProyectoFinal/views/principal.php/'"/> REGISTRO DE APODERADOS</h2>
	
	
<div align="center" class="card card-container">
<form method="POST" action="">
<label>DNI apoderado</label>
<input type="text" name="DNIapoderado" minlength="8" maxlength="8" placeholder="for example: 72404032" required/><br></br>
<label>Nombres</label>
<input type="text" name="Nombres" placeholder="escriba su nombre"><br></br>
<label>Apellidos</label>
<input type="text" name="Apellidos" placeholder="escriba sus apellidos"><br></br>
<label>Direccion</label>
<input type="text" name="direccion" placeholder="for example: Villa Maria H-09">
<br></br>
<input type="submit"  class="btn btn-info" name="insertar" value="REGISTRAR APODERADO" >
</div>
</form>

<br />
<h3><b>::HISTORIAL DE LOS APODERADOS::</b></h3>
<table class="table table-hover" >
	<thead class="thead-dark">
<tr>
<th>ID APODERADO</th>
<th>DNI APODERADO</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>DIRECCION</th>
<th>EDITAR</th>
<th>ELIMINAR</th>
</tr>
</thead>

<?php 
$mostrar="SELECT * FROM apoderado";
$ejecutar=mysqli_query($conexion,$mostrar);
$i= 0;
while ($fila=mysqli_fetch_array($ejecutar)){
	$iap=$fila['Idapoderado'];
	$dniAP=$fila['DNIapoderado'];
	$nom=$fila['Nombres'];
	$app=$fila['Apellidos'];
	$dir=$fila['direccion'];
	$i++;
?>	
<tr align="center">
<td><?php echo $iap; ?></td>
<td><?php echo $dniAP; ?></td>
<td><?php echo $nom; ?></td>
<td><?php echo $app; ?></td>
<td><?php echo $dir; ?></td>
<td><a href="index.php?editarapoderado=<?php echo $iap;?>"class="btn btn-warning">Editar</a></td>
<td><a href="index.php?eliminarapoderado=<?php echo $iap;?>"class="btn btn-success">Eliminar</a></td>
</tr>
	<?php } ?>
  </table>
</body>
</html>