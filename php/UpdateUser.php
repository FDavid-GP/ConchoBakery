<?php
require 'conexion.php';
session_start();
/*
$Nombre = $_POST['Nombre'];
$ApellidoP = $_POST['ApellidoP'];
$ApellidoM = $_POST['ApellidoM'];
$Correo = $_POST['Correo'];
$Contrasenia = $_POST['Contrasenia'];
$Tipo = $_POST['Tipo'];
*/
	$sql= "CALL SP_User_Update('h', 'o', 'l', 'a', 'goku', '3')";        
//	$sql= "CALL SP_User_Update('$Nombre', '$ApellidoP', '$ApellidoM', '$Correo', '$Contrasenia', '$Tipo')";        
	//$sql= "INSERT INTO User (Nombre, ApellidoP, ApellidoM, Correo, Contrasenia, Tipo) VALUES ('$Nombre', '$ApellidoP', '$ApellidoM', '$Correo', '$Contrasenia', '$Tipo')";
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