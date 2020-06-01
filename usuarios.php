<!doctype html>
<html lang="en">

<!--<div class="jumbotron mt-4">
  <h1 class="display-4">Notes App Nodejs And Mongodb!</h1>
  <p class="lead">A simple App to manage Notes developed with Nodejs, Express, Mongodb and Javascript Technologies</p>
  <hr class="my-4">
  <p>veniam voluptatibus aliquid unde sit Libero veniam similique ex reiciendis doloribus! Deleniti sunt cum ad est atque. Esse earum
  </p>
  <a class="btn btn-primary btn-lg" href="http://faztweb.com" role="button">FaztWeb</a>
</div>-->


    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Panaderia Concho</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
	<link href="./css/style.css" rel="stylesheet"/>
<link href="./css/main.css" rel="stylesheet"/>

    </head>

    <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
   
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./indexG.html">Volver</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./signin.html">Salir</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

	<table border=2px id="personal">
		<tr>
			<th>Nombre</th> <th>Apellido Paterno</th> <th>Apellido Materno</th> <th> Correo </th> <th> Password </th> <th> Puesto </th> <th>Modificar</th> <th> Eliminar </th>
		</tr>   
<?php
//require 'conexion.php';

    $conn = mysqli_connect('localhost','root','resident2580','concho');
    $result = mysqli_query($conn, "select * from User order by Nombre asc");

		//$sql = "SELECT * from User where tipo = 3 order by Nombre asc";
	
//$result = mysqli_query($conexion, $sql);

 while($row = mysqli_fetch_array($result)) {
?>

<tr>
  <th><?php echo $row['Nombre'];?></th>
  <th><?php echo $row['ApellidoP'];?></th>
  <th><?php echo $row['ApellidoM'];?></th>
  <th><?php echo $row['Correo'];?></th>
  <th><?php echo $row['Contrasenia'];?></th>
  <th><?php echo $row['Tipo'];?></th>
  <td><button id="actualizar" type="submit"><a href=""><i class="fas fa-edit"></i></a></button></td>
  <td> <form method="post" action="./php/eliminarUsuario.php">
	<input type="hidden" name"Correo" value=<?php echo $row['Correo'];?>>
	<input id="eliminar2" type="submit" value="Eliminar">
  <button id="eliminar2" type="submit"><i id="tra" class="fa fa-trash" aria-hidden="true"></i></button>          

	</form>
	</td>
</tr>

<?php
}
mysqli_close($conn);
?>

<!--
echo 	"<tr>";
        echo	"<td> ".$row[Nombre]."</td>";
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
-->

</table> 

        <!-- Footer -->
        

        <!-- Javascript -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

<footer class="footer-container">
        
	        <div class="container">
	        	<div class="row">
	        		
                    <div align="center" class="col">
                    	&copy; 2019 Panaderia Concho S.A de C.V. Todos los Derechos Reservados.
                      <i class="fab fa-twitter"></i>
                      <i class="fab fa-facebook"></i>
                      <i class="fab fa-instagram"></i>
                    </div>
                    
                </div>
	        </div>
                	
        </footer>

</html>
