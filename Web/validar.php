<?php
include("conexion.php");

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//$conexion=mysqli_connect("13.59.80.71","proyecto","Proyecto123456**","proyecto_tickets", "10502");

$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contraseña'";



$resultado=mysqli_query($conn,$consulta);
//echo $resultado;

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:home.html");
}else{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad">ERROR DE USUARIO</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
