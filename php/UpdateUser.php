<?php
require 'conexion.php';
session_start();

$Name = $_POST['name'];
$id = $_POST['Nombre2'];
$LastName = $_POST['lname'];
$LastName2 = $_POST['lname2'];
$Email = $_POST['email'];
$Tipo = $_POST['Tipo'];
$Pass = $_POST['pass'];
//	$sql= "CALL SP_User_Update('h', 'o', 'l', 'a', 'goku', '3')";        
	$sql= "CALL SP_User_Update('".$id."', '".$Name."', '".$LastName."', '".$LastName2."', '".$Email."', '".$Pass."', '".$Tipo."')";        
        $result1 = mysqli_query($conexion, $sql);
       $consulta = mysqli_query($conexion, "SELECT * from User");
        $i = mysqli_num_rows($consulta);
header("Location: /concho/usuarios.php");

?>