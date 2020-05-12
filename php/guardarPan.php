<?php
require 'conexion.php';
session_start();
/*
$NombreP = $_POST['NombreP'];
$Imag = $_POST['Imag'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
*/
	$sql= "CALL SP_Pan('hola', 'mi', '3', '3')";        
//	$sql= "CALL SP_Pan('$NombreP', '$Imag', '$precio', '$cantidad')";        
        $result1 = mysqli_query($conexion, $sql);
       // $consulta = mysqli_query($conexion, "SELECT * from User");
        //$i = mysqli_num_rows($consulta);
    if($result1){
        echo "Correcto";
    }
    else{
        echo "Error";
    }
?>