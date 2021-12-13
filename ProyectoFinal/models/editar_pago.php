<?php
if(isset($_GET['editarpago'])){
	$editarip = $_GET['editarpago'];
	$consulta = "SELECT * FROM pago WHERE Idpago='$editarip'";
	$ejecutar = mysqli_query($conexion,$consulta);
	$fila = mysqli_fetch_array($ejecutar);
	$ip=$fila['Idpago'];
	$selec_01=$fila['DNIestudiante'];
	$M=$fila['condicion_matricula'];
	$P=$fila['condicion_pension'];
	
	}
?>
<br />
<form method="POST" action="">

<label>Condicion de matricula</label>
 <input type="radio"  name="matricula_v" value="Pagado"
<?php
if($M=="Pagado"){
	
echo "checked";
}
?>
>Pagado   


<input type="radio"  name="matricula_v" value="No Pagado"
<?php
if($M=="No Pagado"){
	
echo "checked";
}
?>

>No Pagado<br>     

<label>Condicion de pension</label><br>
<input type="radio"  name="pension_v" value="Pagado-Abril"
<?php
if($P=="Pagado-Abril"){
	
echo "checked";
}
?>
>Pagado-Abril<br>  
<input type="radio"  name="pension_v" value="Pagado-Mayo"
<?php
if($P=="Pagado-Mayo"){
	
echo "checked";
}
?>
>Pagado-Mayo<br>    
<input type="radio"  name="pension_v" value="Pagado-Junio"
<?php
if($P=="Pagado-Junio"){
	
echo "checked";
}
?>
>Pagado-Junio<br>    
<input type="radio"  name="pension_v" value="Pagado-Julio"
<?php
if($P=="Pagado-Julio"){
	
echo "checked";
}
?>
>Pagado-Julio<br>    
<input type="radio"  name="pension_v" value="Pagado-Agosto"
<?php
if($P=="Pagado-Agosto"){
	
echo "checked";
}
?>
>Pagado-Agosto<br>          
<input type="radio"  name="pension_v" value="Pagado-Septiembre"
<?php
if($P=="Pagado-Septiembre"){
	
echo "checked";
}
?>
>Pagado-Septiembre<br>    
<input type="radio"  name="pension_v" value="Pagado-Octubre"
<?php
if($P=="Pagado-Octubre"){
	
echo "checked";
}
?>
>Pagado-Octubre<br>    
<input type="radio"  name="pension_v" value="Pagado-Noviembre"
<?php
if($P=="Pagado-Noviembre"){
	
echo "checked";
}
?>
>Pagado-Noviembre<br>    
<input type="radio"  name="pension_v" value="Pagado-Diciembre"
<?php
if($P=="Pagado-Diciembre"){
	
echo "checked";
}
?>
>Pagado-Diciembre<br>    
<input type="radio"  name="pension_v" value="No Pagado"
<?php
if($P=="No Pagado"){
	
echo "checked";
}
?>
>No Pagado<br>   
<br></br>
<input type="submit" class="btn btn-info" name="actualizar" value="ACTUALIZAR VALIDACION DE PAGO">
</form>

<?php
if(isset($_POST['actualizar'])){

$actualizar_M = $_POST['matricula_v'];
$actualizar_P = $_POST['pension_v'];

$actualizar = "UPDATE pago SET condicion_matricula='$actualizar_M',condicion_pension='$actualizar_P' WHERE Idpago='$editarip'";
$ejecutar= mysqli_query($conexion, $actualizar);
if($ejecutar){
	echo "<script>alert('Validacion Actualizada')</script>";
	echo "<script>window.open('index.php')</script>";
	}
}
?>