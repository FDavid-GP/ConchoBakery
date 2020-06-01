<?php
require 'conexion.php';
session_start();

$NombreP = $_POST['name'];
$Imag = $_POST['imagen'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

//	$sql= "CALL SP_Pan('hola', 'mi', '3', '3')";        
	$sql= "CALL SP_Pan('$NombreP', '$Imag', '$precio', '$cantidad')";        
        $result1 = mysqli_query($conexion, $sql);
        $consulta = mysqli_query($conexion, "SELECT * from Pan");
        $i = mysqli_num_rows($consulta);
	header("Location: /concho/formPan.html");
?>