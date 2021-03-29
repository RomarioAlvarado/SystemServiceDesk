<!DOCTYPE html>
<?php  
	include("conexion.php");
?>

<html>
<head>
	<title>Asignacion</title>
</head>
<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/fontello.css">

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
	<br><br>
	<?php  
	if (isset($_POST['reasignar'])) {
		# code...
$Numeroticket=$_POST["idTickets"];
$Solicitante=$_POST["Solicitante"];
$Fecha=$_POST["Fecha"];
$Categoria=$_POST["Categoria"];
$Tipo=$_POST["Tipo"];
$Descripcion=$_POST["Descripcion"];
$Area=$_POST["Area"];
$Estado=$_POST["Estado"];
$AsignadoA=$_POST["nombre"];
$idAsignacion=$_POST["id"];


$sql="UPDATE tickets SET id='".$idAsignacion."' WHERE idTickets='".$idAsignacion."'";
$serult=mysqli_query($connn,$sql);

	if ($result) {
		# code...
		echo "<script language='JavaScript'> alert('Los datos se actualizaron correctamente'); 
		location.assign(ListaDeTickets.php');
		</script>";
	} else {
		# code...
		echo "<script language='JavaScript'> alert('Los datos NO se actualizaron'); 
		location.assign(ListaDeTickets.php');
		</script>";
	}
	

	}
	else {
		# code...
		$id=$_GET['idTickets'];
		$sql="SELECT tickets.idTickets,tickets.Solicitante,tickets.Fecha,categoria.Categoria,tipo.Tipo,tickets.Descripcion,tickets.Area,estados.Estado,usuarios.nombre
FROM tickets,categoria,tipo,estados,usuarios
WHERE categoria.idCategoria=tickets.idCategoria AND tipo.idTipo=tickets.idTipo AND estados.idEstado=tickets.idEstado AND usuarios.id=tickets.id AND tickets.idTickets='".$id."'";
$result=mysqli_query($conn,$sql);

$mostrar=mysqli_fetch_assoc($result);

$Numeroticket=$mostrar["idTickets"];
$Solicitante=$mostrar["Solicitante"];
$Fecha=$mostrar["Fecha"];
$Categoria=$mostrar["Categoria"];
$Tipo=$mostrar["Tipo"];
$Descripcion=$mostrar["Descripcion"];
$Area=$mostrar["Area"];
$Estado=$mostrar["Estado"];
$AsignadoA=$mostrar["nombre"];



	
	?>
<?php
  $mysqli = new mysqli('localhost', 'root', '', 'sistema1');
?>
<center>
	<br><br>
	<h1>Asignacion de ticket</h1>
	<br><br>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		
		<label>No. De Ticket : </label>
		<imput type= "text" name="NoTicket" value=""><?php echo $Numeroticket; ?><br>
		

		<label>Solicitante : </label>
		<imput type= "text" name="NoTicket" value=""><?php echo $Solicitante; ?> <br>

		<label>Fecha : </label>
		<imput type= "text" name="NoTicket" value=""><?php echo $Fecha; ?> <br>

		<label>Categoria : </label>
		<imput type= "text" name="NoTicket" value=""><?php echo $Categoria; ?> <br>

		<label>Tipo : </label>
		<imput type= "text" name="NoTicket" value=""><?php echo $Tipo; ?> <br>

		<label>Descripcion </label>
		<imput type= "text" name="NoTicket" value=""><?php echo $Descripcion; ?> <br>

		<label>Área </label>
		<imput type= "text" name="NoTicket" value=""><?php echo $Area; ?> <br>

		<label>Estado </label>
		<imput type= "text" name="NoTicket" value=""><?php echo $Estado; ?> <br>

		<label>Asigando a : </label>
		<imput type= "text" name="NoTicket" value="">
				<td>
		<select class="form-control" id="seleccategoria" name="seleccategoria" >
         <option value="">Seleccione Tecnico  </option>
              <?php
          		$query = $mysqli -> query ("SELECT id,nombre FROM usuarios");
          		while ($valores = mysqli_fetch_array($query)) {
            	echo '<option value="'.$valores['id'].'">'.$valores['nombre'].'</option>';
          			}
        		?>
          </select>
	</td>
			 <br>

		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<input type="submit" name="reasignar" value="REASIGNAR">
		<a href="ListadoDeTickets.php">Regresar</a>
	</form>
	<?php  
	}
	?>

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