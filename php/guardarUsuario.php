<?php
require 'conexion.php';

$Name = $_POST['fname'];
$LastName = $_POST['laname'];
$LastName2 = $_POST['laname2'];
$Email = $_POST['Email'];
$Password = $_POST['password'];

	$sql= "CALL SP_User('".$Name."', '".$LastName."', '".$LastName2."', '".$Email."', '".$Password."', '3')";        
        $result1 = mysqli_query($conexion, $sql);
       $consulta = mysqli_query($conexion, "SELECT * from User");
        $i = mysqli_num_rows($consulta);
header("Location: /concho/signin.html");
?>