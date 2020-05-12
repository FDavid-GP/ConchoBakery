<?php
require 'conexion.php';
session_start();
/*
$NombreIng = $_POST['NombreIng'];
$Cantidad = $_POST['Cantidad'];
$fecha = $_POST['fecha'];
*/
	$sql= "CALL SP_Ingrediente('hola', '3', 'nombre',)";        
//	$sql= "CALL SP_Ingrediente('$Nombre', '$Cantidad', '$fecha')";        
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