
<?php 
require_once("../db/conexion.php");

?>
<?php 
if(isset($_POST['login'])){
	$id_per=$_POST['Nombres'];
	$cla=$_POST['DNIapoderado'];
	$query=mysqli_query($conexion,"SELECT * FROM apoderado WHERE Nombres='".$id_per."' and DNIapoderado='".$cla."'");
	$n=mysqli_num_rows($query);
	if($n==1){
		
		echo "<script language='JavaScript'>";
                      
		echo "location='/ProyectoFinal/views/estudiante_apoderado.php/'";
		echo "</script>"; 
		}else if($n==0){
		echo "<script>alert('Datos Incorrectos')</script>";
			  
			}
	
	}
?>
