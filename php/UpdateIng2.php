<?php
require 'conexion.php';
session_start();

$NombreIng = $_POST['name'];
$Cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];

//	$sql= "CALL SP_Ing_Update('hola', '3', 'nombre',)";        
	$sql= "CALL SP_Ing_Update('$NombreIng', '$Cantidad', '$fecha')";        
        $result1 = mysqli_query($conexion, $sql);
        $consulta = mysqli_query($conexion, "SELECT * from ingredientes");
        $i = mysqli_num_rows($consulta);
header("Location: /concho/ing2.php");
?>