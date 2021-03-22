<?php
include("conexion.php")
?>

<html>
<head>
<style>

</style>
</head>
<meta charset="UTF-8">
	<title>Home</title>
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

		
<form name="Mantenimiento" action="mant.php" method="post">
	<tr></tr>
<table border="1">



<label>REGISTRAR USUARIOS </label>
<br><br>

<tr>

	<td><label>Codigo</label></td><td><input type="text" value="" maxlength="7" size="10" name="txtcodigo"></td>
	<td><label>Usuario</label></td><td><input type="text" value="" maxlength="10" name="txtuser"  size="10"></td>
	<td><label>ID  </label><input type="text" value="" maxlength="7" name="txtid"></td>
</tr>
<tr>

	<td><label>Nombre</label></td><td><input type="text" value="" maxlength="50" name="txtnombre"></td>
	<td><label>Contraseña</label></td><td><input type="text" value="" maxlength="9" size="10" name="txtpass"></td>
	<td><label>Puesto</label><input type="text" value="" maxlength="7" name="txtpuesto"></td>
</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Nuevo" name="limpiardatos" >
<input type="submit" value="Grabar" name="grabardatos" >
</td>
<td>
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos"></td>
</tr>


<tr><td colspan="4"><label>Listado de Usuarios </label></td></tr>

<tr><td><label>ID  </label></td> 
	<td><label>Codigo  </label></td>
	<td><label>Nombre  </label></td>
	<td><label>Puesto  </label></td>
	<td><label>Usuario  </label></td>
	
</tr>

<?php 
$sql="SELECT * FROM usuarios";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr><td><?php echo $mostrar['id'] ?> 
	<td><?php echo $mostrar['codigo'] ?>
	<td><?php echo $mostrar['nombre'] ?>
	<td><?php echo $mostrar['puesto'] ?>
	<td><?php echo $mostrar['usuario'] ?>
	

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
			<a href="tickets.php">Creacion de Ticket </a>
			<a href="ListarTickets.php">TICKETS </a>
			<a href="#">MENU 6</a>
		</nav>
		<label for="btn-menu" class="icon-equis"></label>
	</div>
</div>
</body>
</html>
