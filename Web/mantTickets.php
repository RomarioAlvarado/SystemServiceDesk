<?php

include("conexion.php");


$id = $_POST["txtidcategoria"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: MantUsuarios.php");
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
	
	

?>
