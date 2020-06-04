<?php
require 'conexion.php';

$Nombre = $_POST['Nombre'];
	$sql= "CALL SP_Pan_Delete('".$Nombre."')";        
  
        $result1 = mysqli_query($conexion, $sql);
       $consulta = mysqli_query($conexion, "SELECT * from Pan");
        $i = mysqli_num_rows($consulta);
header("Location: /concho/panes.php");
?>