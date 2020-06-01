<?php
require 'conexion.php';

$Name = $_POST['name'];
$LastName = $_POST['lname'];
$LastName2 = $_POST['lname2'];
$Email = $_POST['email'];
$Password = $_POST['pass'];
$Tipo = $_POST['Tipo'];

	$sql= "CALL SP_User('".$Name."', '".$LastName."', '".$LastName2."', '".$Email."', '".$Password."', '".$Tipo."')";        
        $result1 = mysqli_query($conexion, $sql);
       $consulta = mysqli_query($conexion, "SELECT * from User");
        $i = mysqli_num_rows($consulta);
header("Location: /concho/indexG.html");
?>