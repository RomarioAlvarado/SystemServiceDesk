<?php
include("conexion.php")
?>
<html>
<head>
<style>

</style>
</head>
<meta charset="UTF-8">
	<title>Tipo Categorias</title>
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
<form name="Mantenimiento" action="manteTipoCat.php" method="post">
<table border="1">

<label>REGISTROS TIPOS DE CATEGORIAS </label>
<br><br><br>

<tr>
	<td><label>ID  </label></td><td><input type="text" value="" maxlength="7"name="txtidtipocategoria" ></td>
	
</tr>
<tr>
	<td><label>Tipo de Categoria </label></td><td><input type="text" value="" maxlength="50" name="txttipocategoria" ></td>
	
</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Nuevo" name="limpiardatosTipoCat" >
<input type="submit" value="Grabar" name="grabardatosTipoCat" >
<input type="submit" value="Modificar" name="modificardatosTipoCat" >
<input type="submit" value="Eliminar" name="eliminardatosTipoCat">
</td>
</tr>

<tr><td colspan="4"><label>Listado Tipo de Categorias </label></td></tr>

<tr><td><label>ID</label></td>
	<td><label>Tipo Categoria</label></td>
	
</tr>

<?php 
$sql="SELECT * FROM tipo";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> <td><?php echo $mostrar['idTipo'] ?>
	<td><?php echo $mostrar['Tipo'] ?>
	

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
			<a href="ListadoDeTickets.php">TICKETS </a>
			<a href="#">MENU 6</a>
		</nav>
		<label for="btn-menu" class="icon-equis"></label>
	</div>
</div>
</body>
</html>
