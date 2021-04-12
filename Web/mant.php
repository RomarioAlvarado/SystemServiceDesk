<?php

include("conexion.php");

$cod = $_POST["txtcodigo"];
$edad = $_POST["txtuser"];
$nom = $_POST["txtnombre"];
$tel = $_POST["txtpass"];
$id = $_POST["txtid"];
$puesto = $_POST["txtpuesto"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: MantUsuarios.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "call pr_create_user('$cod','$nom','$puesto','$edad','$tel')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: MantUsuarios.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE usuarios SET nombre='$nom',usuario='$edad',contraseña='$tel' WHERE id=$id";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: MantUsuarios.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM usuarios WHERE id=$id";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: MantUsuarios.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>
