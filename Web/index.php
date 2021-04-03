
<?php 
session_start();

include "conexion.php";
include "funciones.php";
if(isset($_SESSION['usuario'])) {
	header("Location: home.html");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
	<form id="form1" name="form1" method="post" action="">

		<h1>Ingreso al Sistema</h1>
		<p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
		<p>Contraseña <input type="password" placeholder="ingrese su Contraseña" name="contrasena"></p>
		<input type="submit" name="ingresar">

	</form>
</body>
</html>
<?php
if(isset($_POST['ingresar'])) {

	$usuario = clean($_POST['usuario']);
	$contrasena =$_POST['contrasena'];
	
	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
	
	$contar = mysqli_num_rows($query);
	
	if ($contar != 0) {
	
		while($row=mysqli_fetch_array($query)) {
		
			if($usuario == $row['usuario'] && $contrasena == $row['contrasena']) 
			
			{
			
				$_SESSION['usuario'] = $usuario;
				
				$_SESSION['id'] = $row['id'];
				
				$_SESSION['rango'] = $row['rango'];
				
				header("Location: home.html");
				
			}
			
		} 
		
	} else { echo "El nombre de usuario y/o contrasena no coinciden"; }
	
}
?>