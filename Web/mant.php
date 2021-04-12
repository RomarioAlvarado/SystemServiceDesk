<?php

include("conexion.php");

$cod = $_POST["txtcodigo"];
$user = $_POST["txtuser"];
$nom = $_POST["txtnombre"];
$pass = $_POST["txtpass"];
$id = $_POST["txtid"];
$puesto = $_POST["txtpuesto"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: MantUsuarios.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "call pr_create_user('$cod','$nom','$puesto','$user','$pass')";

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
			$sqlmodificar = "call pr_update_user($id, '$nom', '$puesto', '$user','$pass')";

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
			$sqleliminar = "call pr_delete_user($id)";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: MantUsuarios.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>
