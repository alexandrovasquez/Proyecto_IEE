<?php 
require_once("../db/conexion.php");
?>
<?php 
if (isset($_POST['insertar'])){
	
	$dniAP=$_POST['DNIapoderado'];
	$nom=$_POST['Nombres'];
	$app=$_POST['Apellidos'];
	$dir=$_POST['direccion'];

	$insert="INSERT INTO apoderado (DNIapoderado,Nombres,Apellidos,direccion) values ('$dniAP','$nom','$app','$dir')";
	$ejecutar=mysqli_query($conexion,$insert);
	if($ejecutar){
		echo "<script>alert('APODERADO REGISTRADO SATISFACTORIAMENTE')</script>";
		}else{
			"<script>alert('Error: Error')</script>";
			}
	}
?>

<?php
if(isset($_GET['editarapoderado'])){
	include ("editar_apoderado.php");
	}
?>
<?php
if(isset($_GET['eliminarapoderado'])){
	$borrariAP=$_GET['eliminarapoderado'];
	$eliminar="DELETE FROM apoderado WHERE Idapoderado='$borrariAP'";
	$ejecutar=mysqli_query($conexion,$eliminar);
	
	if($ejecutar){
		echo "<script>alert('EL APODERADO FUE ELIMINADO')</script>";
		echo "<script> window.open('apoderado.php')</script>";
	}
	}
?>


</body>
</html>