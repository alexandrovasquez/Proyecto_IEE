
<?php
if(isset($_GET['editaralumno'])){
	$editariAL = $_GET['editaralumno'];
	$consulta = "SELECT * FROM estudiante WHERE Idestudiante='$editariAL'";
	$ejecutar = mysqli_query($conexion,$consulta);
	$fila = mysqli_fetch_array($ejecutar);
	$idal=$fila['Idestudiante'];
	$selec_01=$fila['Idusuario'];
	$selec_02=$fila['DNIapoderado'];
	$dni=$fila['DNIestudiante'];
	$nom=$fila['Nombres'];
	$app=$fila['Apellidos'];
	$ipro=$fila['Grado_seccion'];
	$niv=$fila['Nivel'];
	$fm=$fila['fecha'];
	
	}
?>
<br />
<form method="POST" action="">


<input type="text" name="anom" value="<?php echo $nom; ?>">
<input type="text" name="aapp" value="<?php echo $app; ?>">

<select name="aipro">
<option value="<?php echo $ipro; ?>"><?php echo $ipro; ?></option>
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

<select name="aniv">
<option value="<?php echo $niv; ?>"><?php echo $niv; ?></option>
<option value="inicial">inicial</option>
<option value="primaria">primaria</option>
<option value="secundaria">secundaria</option>
</select>

<br></br>
<input type="submit" class="btn btn-info" name="actualizar" value="ACTUALIZAR ESTUDIANTE">
</form>

<?php
if(isset($_POST['actualizar'])){


$actualizar_anom = $_POST['anom'];
$actualizar_aapp = $_POST['aapp'];
$actualizar_aipro = $_POST['aipro'];
$actualizar_aniv = $_POST['aniv'];


$actualizar = "UPDATE estudiante SET Nombres='$actualizar_anom',Apellidos='$actualizar_aapp',Grado_seccion='$actualizar_aipro',Nivel='$actualizar_aniv' WHERE Idestudiante='$editariAL'";
$ejecutar= mysqli_query($conexion, $actualizar);
if($ejecutar){
	echo "<script>alert('Datos Actualizados')</script>";
	echo "<script>window.open('alumno.php/')</script>";
	
	}
}
?>
