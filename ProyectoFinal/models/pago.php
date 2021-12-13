<?php
require_once("../db/conexion.php");
?>
<?php 
if (isset($_POST['insertapago'])){
	
	$select_01=$_POST['select_01'];
	$M=$_POST['matricula_v'];
	$P=$_POST['pension_v'];
	
	$insert="INSERT INTO pago (DNIestudiante,condicion_matricula,condicion_pension) values ('$select_01','$M','$P')";
	$ejecutar=mysqli_query($conexion,$insert);
	if($ejecutar){
		echo "<script>alert('VALIDACION REGISTRADO SATISFACTORIAMENTE')</script>";
		}else{
			"<script>alert('Error: Error')</script>";
			}
	}
?>


<?php
if(isset($_GET['editarpago'])){
	include ("editar_pago.php");
	}
?>
<?php
if(isset($_GET['eliminarpago'])){
	$borrarip=$_GET['eliminarpago'];
	$eliminar="DELETE FROM pago WHERE Idpago='$borrarip'";
	$ejecutar=mysqli_query($conexion,$eliminar);
	
	if($ejecutar){
		echo "<script>alert('LA VALIDACION FUE ELIMINADO')</script>";
		echo "<script> window.open('index.php')</script>";
	}
	}
?>


</body>
</html>