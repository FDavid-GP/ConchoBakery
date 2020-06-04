
<?php
require 'conexion.php';
session_start();

$correo = $_POST['email'];
$contrasena = $_POST['password'];

if((!empty($correo)) && (!empty($contrasena))){
	/*if(strlen($contrasena) < 6){
		echo "<script language=JavaScript>
		alert('LA CONTRASEÑA DEBE DE TENER MAS DE 8 CARACTERES');
		window.location = '/concho/signin.html'
		</script>";
	}*/
	//else{


		//$sql= "CALL SP_Ingrediente('hola', '3', 'nombre',)";        
		//	$sql= "CALL SP_Ingrediente('$Nombre', '$Cantidad', '$fecha')";        
        $query = mysqli_query($conexion, "select * from User where Correo = '$correo' and Contrasenia = '$contrasena'");
       // $consulta = mysqli_query($conexion, "SELECT * from User");
        //$i = mysqli_num_rows($consulta);


        $result = mysqli_fetch_array($query);

        if (($result['Correo'] == $correo) && ($result['Contrasenia'] == $contrasena) && $result['Tipo'] == 1){
        		header('Location: /concho/indexG.html');
        }
        else if(($result['Correo'] == $correo) && ($result['Contrasenia'] == $contrasena) && $result['Tipo'] == 2){
        		header('Location: /concho/indexE.html');
        }
        else if(($result['Correo'] == $correo) && ($result['Contrasenia'] == $contrasena)){
        		header('Location: /concho/indexC.php');
        }
        else
        {
        	echo "<script language=JavaScript>
        		  alert('EL USUARIO O CONTRASEÑA NO ES CORRECTO');
        		  window.location = '/concho/signin.html'
        		  </script>"; 
		}

		mysqli_close($conexion);
	//}
}

else
{

	echo "<script language=JavaScript>
		  alert('POR FAVOR LLENE TODOS LOS CAMPOS REQUERIDOS');
		  window.location = '/concho/signin.html');
		  </script>";
}
   
?>

