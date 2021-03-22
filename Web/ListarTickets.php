<?php
include("conexion.php")
?>
<html>
<head>
<style>

</style>
</head>
<meta charset="UTF-8">
	<title>Tickets</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/fontello.css">

<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu" class="icon-menu"></label>
		</div>
			<div class="logo">
				<h1>Menu</h1>
			</div>
			<nav class="menu">
				<a href="home.html">Inicio</a>
				<a href="#">Nosotros</a>
				<a href="#">Blog</a>
				<a href="#">Contacto</a>
				<a href="index.php">Salir</a>
			</nav>
		</div>
	</header>
	<br><br><br><br><br>
	<center>
				<form class="flexsearch--form" action="#" method="post">
					
						<input class="flexsearch--input" type="search" name="textbuscar">
					
						<input class="flexsearch--submit" type="submit" value="buscar" />
				</form>
			</center>
	<br><br>

<center>
<form name="Mantenimiento" action="mantTickets.php" method="post">
<table border="1">

<label>TICKETS CREADOS </label>
<br><br><br>

<tr>
	
	
</tr>
	
	<td><label>ID  </label></td><td><input type="text" value="" maxlength="7"name="txtidcategoria" ></td>
	<td><label>Estado </label></td><td><input type="text" value="" maxlength="50" name="txtcategoria" ></td>
	
	


<td colspan="4" align="center">

<input type="submit" value="Modificar" name="modificardatosCat" >

</td>




<tr>

	<td><label>ID</label></td>
	<td><label>Solicitante</label></td>
	<td><label>Fecha de Apertura</label></td>
	<td><label>Categoria</label></td>
	
	<td><label>Descripcion</label></td>
	<td><label>Area</label></td>
	<td><label>Estado</label></td>
	<td><label>Asignado a :</label></td>
	
</tr>

<?php 
$sql="SELECT tickets.idTickets,tickets.Solicitante,tickets.Fecha,categoria.Categoria,tipo.Tipo,tickets.Descripcion,tickets.Area,estados.Estado,usuarios.nombre
FROM tickets,categoria,tipo,estados,usuarios
WHERE categoria.idCategoria=tickets.idCategoria AND tipo.idTipo=tickets.idTipo AND estados.idEstado=tickets.idEstado AND usuarios.id=tickets.id";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> <td><?php echo $mostrar['idTickets'] ?>
	 <td><?php echo $mostrar['Solicitante'] ?>
	 <td><?php echo $mostrar['Fecha'] ?>
	 <td><?php echo $mostrar['Categoria'] ?>
	 
	 <td><?php echo $mostrar['Descripcion'] ?>
	 <td><?php echo $mostrar['Area'] ?>
	 <td><?php echo $mostrar['Estado'] ?>
	 <td><?php echo $mostrar['nombre'] ?>
	

</tr>
<?php
}

?>

</table>
</form>
</center>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="MantUsuarios.php">Usuarios</a>
			<a href="categorias.php">Categorias</a>
			<a href="TiposCategorias.php">Tipo Categorias</a>
			<a href="tickets.php">Creacion de Tiket </a>
			<a href="ListarTickets.php">TICKETS</a>
			<a href="#">MENU 6</a>
		</nav>
		<label for="btn-menu" class="icon-equis"></label>
	</div>
</div>
</body>
</html>
