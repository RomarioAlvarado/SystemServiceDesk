<?php
session_start();
include("conexion.php");
$id=$_SESSION['id'];
$usuario=$_SESSION['usuario'];
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
				<a href="logout.php">Salir</a>
			</nav>
		</div>
	</header>
	<br><br><br><br><br>
			
	<br><br>

<center>

		
<form name="Mantenimiento" action="CreacionTicket.php" method="post">
	<tr></tr>
<table border="1">



<label>Creacion de TICKET </label>
<br><br><br><br>

<?php
  $mysqli = new mysqli('localhost', 'root', '', 'sistema1');

?>

<tr>

	<td><label>Solicitante </label></td><td><input type="text"  maxlength="50" size="20" readonly name="txtSoli" value="<?php echo $usuario;?>"></td>
	<td><label>fecha  </label></td><td><input type="date" value="<?php echo date('Y-m-d');?>" name="fecha" min="2018-03-25" max="2022-05-25" step="1" /></td>
	
</tr>
<tr>

	<td><label class="sr-only">Categoria </label></td>
	<td>
		<select class="form-control" id="seleccategoria" name="seleccategoria" >
         <option value="">Seleccion Categoria  </option>
              <?php
          		$query = $mysqli -> query ("SELECT idCategoria,Categoria  FROM categoria");
          		while ($valores = mysqli_fetch_array($query)) {
            	echo '<option value="'.$valores['idCategoria'].'">'.$valores['Categoria'].'</option>';
          			}
        		?>
          </select>
	</td>

	<td><label class="sr-only">Tipo </label></td>
	<td>
		<select class="form-control" name="texttipo">
         <option value="">Seleccion Tipo  </option>
              <?php
          		$query = $mysqli -> query ("SELECT idTipo, Tipo FROM tipo");
          		while ($valores = mysqli_fetch_array($query)) {
            	echo '<option value="'.$valores['idTipo'].'">'.$valores['Tipo'].'</option>';
          			}
        		?>
          </select>
	</td>
	
</tr>

<tr>

	<td><label>Descripcion </label></td><td><input type="text" value="" maxlength="150" name="txtDescripcion"></td>
	<td><label>Area </label></td><td><input type="text" value="" maxlength="20"  name="txtArea"></td>

</tr>

<tr>
	<td><label for="paises" class="sr-only">Estado del Ticket </label></td>
	<td>
		<select class="form-control" name="textEstado">
         
              <?php
          		$query = $mysqli -> query ("SELECT idEstado,Estado FROM estados WHERE 1=idEstado ");
          		while ($valores = mysqli_fetch_array($query)) {
            	echo '<option value="'.$valores['idEstado'].'">'.$valores['Estado'].'</option>';
          			}
        		?>
        	
          </select>
	</td>

	<td><label for="paises" class="sr-only">Asignado a  </label></td>
	<td>
		<select class="form-control" name="textAsig">
         
              <?php
              
          		$query = $mysqli -> query ("SELECT id,nombre FROM usuarios WHERE 1=id ");
          		while ($valores = mysqli_fetch_array($query)) {
            	echo '<option value="'.$valores['id'].'">'.$valores['nombre'].'</option>';
          			}
        		?>
        	
          </select>
	</td>

</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Nuevo" name="limpiardatosTicket" >
<input type="submit" value="Grabar" name="grabardatosTicket" >
</td>
</tr>

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
			<a href="tickets.php">Creacion de Tickets </a>
			<a href="ListadoDeTickets.php">TICKETS </a>
			<a href="#">MENU 6</a>
		</nav>
		<label for="btn-menu" class="icon-equis"></label>
	</div>
</div>
</body>
</html>
