<!DOCTYPE html>
<html>
<head>
	<title>Listado de Tickets</title>
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
			
	<br><br>
<?php
	include("conexion.php");
$sql="SELECT tickets.idTickets,tickets.Solicitante,tickets.Fecha,categoria.Categoria,tipo.Tipo,tickets.Descripcion,tickets.Area,estados.Estado,usuarios.nombre
FROM tickets,categoria,tipo,estados,usuarios
WHERE categoria.idCategoria=tickets.idCategoria AND tipo.idTipo=tickets.idTipo AND estados.idEstado=tickets.idEstado AND usuarios.id=tickets.id";
$result=mysqli_query($conn,$sql);
?>
	<center>
	<h1>Listado de Tickets</h1>
	<a href=""> Nuevo Ticket </a><br><br>
	<table border="1">
		<thead>
		<tr>
		<th>No. de Ticket</th>
		<th>Solicitante </th>
		<th>fecha </th>
		<th>Categoria </th>
		<th>Tipo </th>
		<th>Descripcion </th>
		<th>Área </th>
		<th>Estado </th>
		<th>Asignado a </th>
		<th>Asunto </th>
		</tr>
		</thead>
		<tbody>
			<?php 
			while($mostrar=mysqli_fetch_array($result)){
			?>

			<tr>
				<td><?php echo $mostrar['idTickets'] ?>
	 			<td><?php echo $mostrar['Solicitante'] ?>
	 			<td><?php echo $mostrar['Fecha'] ?>
	 			<td><?php echo $mostrar['Categoria'] ?>
	 			<td><?php echo $mostrar['Tipo']?></td>
				<td><?php echo $mostrar['Descripcion'] ?>
	 			<td><?php echo $mostrar['Area'] ?>
	 			<td><?php echo $mostrar['Estado'] ?>
	 			<td><?php echo $mostrar['nombre'] ?>
	 			<td>
	<?php  echo "<a href='AsiganacionDeTicket.php?idTickets=".$mostrar['idTickets']."'>REASIGNAR</a>"; ?>
	 				-
	 				<?php  echo "<a href=''>EDITAR</a>"; ?>
	 			</td>
				
			</tr>
			<?php  
				}
			?>
		</tbody>
	</table>
	</center>
	<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="MantUsuarios.php">Usuarios</a>
			<a href="categorias.php">Categorias</a>
			<a href="TiposCategorias.php">Tipo Categorias</a>
			<a href="tickets.php">Creacion de Tickets </a>
			<a href="ListarTickets.php">TICKETS </a>
			<a href="#">MENU 6</a>
		</nav>
		<label for="btn-menu" class="icon-equis"></label>
	</div>
</div>
</body>
</html>