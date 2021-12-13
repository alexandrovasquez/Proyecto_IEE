<?php
require_once("../db/conexion.php");
?>



<?php
if(isset($_POST['guardar'])){
	
	$selec_01=$_POST['select_01'];
	$selec_02=$_POST['select_02'];
	$dni=$_POST['DNIestudiante'];
	$nom=$_POST['Nombres'];
	$app=$_POST['Apellidos'];
	$ipro=$_POST['Grado_seccion'];
	$niv=$_POST['Nivel'];
	$fm=$_POST['fecha'];
	$insertar="INSERT INTO estudiante (Idusuario,DNIapoderado,DNIestudiante,Nombres,Apellidos,Grado_seccion,Nivel,fecha) VALUES ('$selec_01','$selec_02','$dni','$nom','$app','$ipro','$niv','$fm')";
	
	$ejecutar= mysqli_query($conexion,$insertar);
	if($ejecutar){
		echo "<script>alert('ESTUDIANTE REGISTRADO SATISFACTORIAMENTE')</script>";
		}
	}

?>


<?php
if(isset($_GET['editaralumno'])){
	include ("editar_alumno.php");
	}
?>
<?php
if(isset($_GET['eliminaralumno'])){
	$borrariALU=$_GET['eliminaralumno'];
	$eliminar="DELETE FROM estudiante WHERE Idestudiante='$borrariALU'";
	$ejecutar=mysqli_query($conexion,$eliminar);
	
	if($ejecutar){
		echo "<script>alert('EL ALUMNO FUE ELIMINADO')</script>";
		echo "<script> window.open('alumno.php')</script>";
	}
	}
?>
