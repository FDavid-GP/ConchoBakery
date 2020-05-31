<?php
require 'conexion.php';

$Name = $_POST['Name'];
$LastName = $_POST['LastName'];
$LastName2 = $_POST['LastName2'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
//$Tipo = $_POST['Tipo'];

 //	$sql= "CALL SP_User('hola', 'mi', 'nombre', 'ese', 'goku', '3')";        
	$sql= "CALL SP_User('".$Name."', '".$LastName."', '".$LastName2."', '".$Email."', '".$Password."', '1')";        
        $result1 = mysqli_query($conexion, $sql);
       $consulta = mysqli_query($conexion, "SELECT * from User");
        $i = mysqli_num_rows($consulta);
    if($result1){
echo '<script type="text/javascript">
    alert("Registrado con exito");
window.history.back();
    </script>';
    }
    else{

echo '<script type="text/javascript">
    alert("Error");
    </script>';
    }
?>