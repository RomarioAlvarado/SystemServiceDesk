<?php

include("conexion.php");
$mysqli = new mysqli('localhost', 'root', '', 'sistema1');

$solicitud = $_POST["txtSoli"];
$fecha = $_POST["fecha"];
$descripcion = $_POST["txtDescripcion"];
$area = $_POST["txtArea"];
$seleccategoria = $_POST["seleccategoria"];
$texttipo = $_POST["texttipo"];
$textEstado = $_POST["textEstado"];
$textAsig = $_POST["textAsig"];



	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatosTicket']))
	{
		header("Location: tickets.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatosTicket']))
	
	{
	$sqlgrabar = "INSERT INTO tickets( Solicitante, Fecha, idCategoria, idTipo, Descripcion, Area, idEstado, id ) values ('$solicitud','$fecha','$seleccategoria','$texttipo','$descripcion','$area','$textEstado','$textAsig')";
		echo $solicitud;
		echo $fecha;
		echo $seleccategoria;
		echo $texttipo;
		echo $descripcion;
		echo $area;
		echo $textEstado;
		echo $textAsig;
		
		


if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: tickets.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
?>
