<?php
require 'conexion.php';

		$sql = "SELECT Nombre from user where tipo = 3 order by Nombre asc";
	
$result = mysqli_query($conexion, $sql);
	if (mysqli_num_rows($result)>0) {
		while($row = mysqli_fetch_assoc($result)) {
            $datos["Productos"][] = $row;
		}
		echo json_encode($datos);
    }
    else{
        echo "No se obtuvieron datos";
	} 

	mysqli_close($conexion);
?>
