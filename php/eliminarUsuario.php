<?php
require 'conexion.php';

$Email = $_POST['Correo'];
//echo "$Email";
	$sql= "CALL SP_User_Delete('".$Email."')";        
//	$sql= "CALL SP_User_Delete(3)";        
  
        $result1 = mysqli_query($conexion, $sql);
       $consulta = mysqli_query($conexion, "SELECT * from User");
        $i = mysqli_num_rows($consulta);
header("Location: /concho/usuarios.php");
?>