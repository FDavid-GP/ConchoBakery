<?php
require 'conexion.php';

		$sql = "SELECT * from user where tipo = 3 order by Nombre asc";
	
$result = mysqli_query($conexion, $sql);


echo "<table border=\"2px\">";
echo 	"<tr>";
echo		"<th>Nombre</th> <th>Apellido Paterno</th> <th>Apellido Materno</th> <th> Correo </th> <th> Password </th> <th> Puesto </th> <th>Modificar</th> <th> Eliminar </th>";
echo	"</tr>";         
 while($row = mysqli_fetch_array($result)) {


echo 	"<tr>";
        echo	"<td> ".$row['Nombre']."</td>";
        echo	"<td> ".$row['ApellidoP']."</td>";
        echo	"<td> ".$row['ApellidoM']."</td>";
        echo	"<td> ".$row['Correo']."</td>";
        echo	"<td> ".$row['Contrasenia']."</td>";
    echo    	"<td> ".$row['Tipo']."</td>";
echo        	"<td><button id=\"actualizar\" type=\"submit\"><a href=\"\"><i class=\"fas fa-edit\"></i></a></button></td>";
echo		"<td><button id=\"eliminar\" type=\"submit\" class=\"btn btn-danger btn-block btn-sm\" action=\"./php/eliminarUser.php\"><i id=\"tra\" class=\"fa fa-trash\" aria-hidden=\"true\"></i></button></td>";          
echo "</tr>";

}

//echo        "</table>";

 
	mysqli_close($conexion);
?>
