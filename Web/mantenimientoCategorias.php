<?php

include("conexion.php");

$id = $_POST["txtidcategoria"];
$nom = $_POST["txtcategoria"];


	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatosCat']))
	{
		header("Location: mantenimientoCategorias.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatosCat']))
	
	{
	$sqlgrabar = "INSERT INTO categoria( idCategoria , Categoria ) values ('$id','$nom')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: mantenimientoCategorias.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatosCat']))
	
	{
			$sqlmodificar = "UPDATE categoria SET Categoria='$nom' WHERE idCategoria=$id";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: mantenimientoCategorias.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatosCat']))
	
	{
			$sqleliminar = "DELETE FROM categoria WHERE idCategoria=$id";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: mantenimientoCategorias.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>
