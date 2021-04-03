<?php

<<<<<<< HEAD
$dbhost = "13.59.80.71";
$port = "10502";
$dbuser = "proyecto";
$dbpass = "Proyecto123456**";
$dbname = "proyecto_tickets";
=======
$dbhost = "13.59.80.71:10502";
$dbuser = "proyecto";
$dbpass = "Proyecto123456**";
$dbname = "proyecto_tickets";

>>>>>>> main

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname, $port);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}

?>
