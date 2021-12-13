
<?php 
require_once("../db/conexion.php");

?>
<?php 
if(isset($_POST['login'])){
	$id_per=$_POST['cargo'];
	$cla=$_POST['clave'];
	$query=mysqli_query($conexion,"SELECT * FROM usuario WHERE cargo='".$id_per."' and clave='".$cla."'");
	$n=mysqli_num_rows($query);
	if($n==1){
		
		echo "<script language='JavaScript'>";
                      
		echo "location='/ProyectoFinal/views/principal.php/'";
		echo "</script>"; 
		}else if($n==0){
		echo "<script>alert('Datos Incorrectos')</script>";
			  
			}
	
	}
?>
