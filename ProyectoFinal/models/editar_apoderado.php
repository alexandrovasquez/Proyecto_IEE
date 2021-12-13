<?php
if(isset($_GET['editarapoderado'])){
	$editariAP = $_GET['editarapoderado'];
	$consulta = "SELECT * FROM apoderado WHERE Idapoderado='$editariAP'";
	$ejecutar = mysqli_query($conexion,$consulta);
	$fila = mysqli_fetch_array($ejecutar);
	$iap=$fila['Idapoderado'];
	$dniAP=$fila['DNIapoderado'];
	$nom=$fila['Nombres'];
	$app=$fila['Apellidos'];
	$dir=$fila['direccion'];
	
	}
?>
<br />
<form method="POST" action="">

<input type="text" name="nomb" value="<?php echo $nom; ?>">
<input type="text" name="appa" value="<?php echo $app; ?>">
<input type="text" name="dire" value="<?php echo $dir; ?>">


<br></br>
<input type="submit" class="btn btn-info" name="actualizar" value="ACTUALIZAR APODERADO">
</form>

<?php
if(isset($_POST['actualizar'])){
	

$actualizar_nomb = $_POST['nomb'];
$actualizar_appa = $_POST['appa'];

$actualizar_dire = $_POST['dire'];

$actualizar = "UPDATE apoderado SET Nombres='$actualizar_nomb',Apellidos='$actualizar_appa',direccion='$actualizar_dire' WHERE Idapoderado='$editariAP'";
$ejecutar= mysqli_query($conexion, $actualizar);
if($ejecutar){
	echo "<script>alert('Datos Actualizados')</script>";
	echo "<script>window.open('aula.php')</script>";
	}
}
?>