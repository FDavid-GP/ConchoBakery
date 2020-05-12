<?php
$host = "localhost:3306";
$usuario = "root";
$clave = "resident2580";
$bd = "concho";

$conexion = mysqli_connect($host, $usuario, $clave, $bd, 3306);
if($conexion){
    echo "Conectado correctamente";
}
else{
    echo "No se pudo conectar";
}
if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
else{
    echo "Conexion a base de datos exitosa";
}
?>