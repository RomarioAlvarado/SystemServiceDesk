<?php
include("conexion.php")
?>
<html>
<head>
<style>

</style>
</head>
<meta charset="UTF-8">
	<title>Categorias</title>
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
<form name="Mantenimiento" action="mantenimientoCategorias.php" method="post">
<table border="1">

<label>REGISTROS DE CATEGORIAS </label>
<br><br><br>

<tr>
	<td><label>ID  </label></td><td><input type="text" value="" maxlength="7"name="txtidcategoria" ></td>
	
</tr>
<tr>
	<td><label>Categoria </label></td><td><input type="text" value="" maxlength="50" name="txtcategoria" ></td>
	
</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Nuevo" name="limpiardatosCat" >
<input type="submit" value="Grabar" name="grabardatosCat" >
<input type="submit" value="Modificar" name="modificardatosCat" >
<input type="submit" value="Eliminar" name="eliminardatosCat">
</td>
</tr>

<tr><td colspan="4"><label>Listado de Categorias </label></td></tr>

<tr><td><label>ID</label></td>
	<td><label>Categoria</label></td>
	
</tr>

<?php 
$sql="SELECT * FROM categoria";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> <td><?php echo $mostrar['idCategoria'] ?>
	<td><?php echo $mostrar['Categoria'] ?>
	

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
			<a href="ListarTickets.php">TICKETS </a>
			<a href="#">MENU 6</a>
		</nav>
		<label for="btn-menu" class="icon-equis"></label>
	</div>
</div>
</body>
</html>
