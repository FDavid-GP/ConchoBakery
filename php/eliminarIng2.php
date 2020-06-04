<?php
require 'conexion.php';

$Nombre = $_POST['Nombre'];
//echo "$Email";
	$sql= "CALL SP_Ing_Delete('".$Nombre."')";        
//	$sql= "CALL SP_User_Delete(3)";        
  
        $result1 = mysqli_query($conexion, $sql);
       $consulta = mysqli_query($conexion, "SELECT * from ingredientes");
        $i = mysqli_num_rows($consulta);
header("Location: /concho/ingredientes.php");
?>