<?php

include("conexion.php");


$nom = $_POST["txttipocategoria"];

$id = $_POST["txtidtipocategoria"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatosTipoCat']))
	{
		header("Location: manteTipoCat.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatosTipoCat']))
	
	{
	$sqlgrabar = "INSERT INTO tipo(	idTipo , Tipo) values ('$id','$nom')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: manteTipoCat.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatosTipoCat']))
	
	{
			$sqlmodificar = "UPDATE tipo SET Tipo='$nom' WHERE idTipo=$id";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: manteTipoCat.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatosTipoCat']))
	
	{
			$sqleliminar = "DELETE FROM tipo WHERE idTipo=$id";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: manteTipoCat.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>
