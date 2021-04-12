<?php
session_start();
include"conexion.php";
include"funciones.php";
if (!isset($_SESSION['usuario'])) {
    # code...
    header("Location: index.php");

    ini_set('error_reporting',0);

}

?>
<!doctype html>
<html lang="es-ES">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Seguimiento de tickets</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">
  
</head>

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

<div id="L">


<center><h1>SEGUIMIENTO DE TICKET No.</h1></center>
<?php if(isset($_GET['id'])): ?>
<form name="form1" method="post" action="seguimiento2.php?<?php echo 'user='.$_SESSION['usuario'].'&id='.$_GET['id'].'&idTickets='.$_GET['idTickets'];?>">
<?php else: ?>
    <form name="form1" method="post" action="seguimiento2.php?<?php echo 'idTickets='.$_GET['idTickets'];?>">
<?php endif; ?>

  <label for="textarea"></label>
  <center>
    <p>
      <textarea name="comentario" cols="80" rows="5" id="textarea"><?php if(isset($_GET['user'])) { ?>@<?php echo $_GET['user']; ?><?php } ?> </textarea>
    </p>
    <p>
      <input type="submit" <?php if (isset($_GET['id'])) { ?>name="reply"<?php } else { ?>name="comentar"<?php } ?>value="Comentar"/>
    </p>
  </center>
</form>
<!-- NOTA: PENDIENTE LA FUNCION DE INSERT YA QUE NO ME ENVIA NI INSERTA LOS PARAMETROS EN LA BASE DE DATOS -->
<?php
	if(isset($_POST['comentar'])) {
        $ahora=DATE('Y-m-d H:i:s');
        $cadena="INSERT INTO comentarios(comentario, usuario, fecha,reply, idTickets) VALUES ('".$_POST['comentario']."',".$_SESSION['id'].",'{$ahora}',0,{$_GET['idTickets']})";
		$query = mysqli_query($conn,$cadena);
        if($query) { 
            $direccion="seguimiento2.php?idTickets=".$_GET['idTickets'];
            header("Location: {$direccion}");
          
             }
        //$query = mysql_query("INSERT INTO comentarios (comentario,usuario,fecha) value ('".$_POST['comentario']."','".$_SESSION['id']."',NOW())");	
		//if($query) { header("Location: seguimiento2.php"); }
	}
?>

<?php
	if(isset($_POST['reply'])) {
        $ahora=DATE('Y-m-d H:i:s');
        $cadena="INSERT INTO comentarios (comentario,usuario,fecha,reply,idTickets) value ('".$_POST['comentario']."',".$_SESSION['id'].",'{$ahora}',".$_GET['id'].",".$_GET['idTickets'].")";
		$query = mysqli_query($conn,$cadena);
        $direccion="seguimiento2.php?id=".$_GET['id']."&idTickets=".$_GET['idTickets'];
		if($query) {  
            $direccion="seguimiento2.php?idTickets=".$_GET['idTickets'];
            header("Location: {$direccion}");

    }
	
    }
?>

<br>

	<div id="container">
    	<ul id="comments">
        
        <?php
		

        $idTickets=$_GET['idTickets'];
        $comentarios = mysqli_query($conn,"SELECT * FROM comentarios WHERE reply=0 AND comentarios.idTickets='".$idTickets."'");
		while($row=mysqli_fetch_array($comentarios)) {
			
			$usuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE id = '".$row['usuario']."'");
			$user = mysqli_fetch_array($usuario);

		?>
        
        	<li class="cmmnt">
            	<div class="avatar">
                <img src="<?php echo $user['avatar']; ?>" height="55" width="55">
                </div>
                <div class="cmmnt-content">
                	<header>
                    <a href="#" class="userlink">Usuario : <?php echo $user['usuario']; ?></a> - <span class="pubdate"> Fecha de Seguimiento : <?php echo $row['fecha']; ?> / No. De Ticket : <?php echo $row['idTickets']; ?></span>
                    </header>
                    <p>
                        <p>Seguimiento de Ticket : </p>
                    </p>
                    <p>
                    <?php echo $row['comentario']; ?>
                    </p>
                    <span>
                
                    <a href="seguimiento2.php?user=<?php echo $user['usuario']; ?>&id=<?php echo $row['id']; ?>&idTickets=<?php echo $row['idTickets']; ?>">
                    Responder
                    </a>
                    </span>
                </div>
                
                <?php
				$contar = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM comentarios WHERE reply = '".$row['id']."'"));
				if($contar != '0') {
					
					$reply = mysqli_query($conn,"SELECT * FROM comentarios WHERE reply = '".$row['id']."' ORDER BY id DESC");
					while($rep=mysqli_fetch_array($reply)) {
						
					$usuario2 = mysqli_query($conn,"SELECT * FROM usuarios WHERE id = '".$rep['usuario']."'");
					$user2 = mysqli_fetch_array($usuario2);
				?>
                
                <ul class="replies">
                	<li class="cmmnt">
                    	<div class="avatar">
                <img src="<?php echo $user2['avatar']; ?>" height="55" width="55">
                </div>
                	<div class="cmmnt-content">
                        <header>
                        <a href="#" class="userlink">Usuario : <?php echo $user2['usuario']; ?></a> - <span class="pubdate"> Fecha de Seguimiento : <?php echo $row['fecha']; ?></span>
                        </header>
                        <p>
                        <?php echo $rep['comentario']; ?>
                        </p>
                    </div>
                    
                    </li>
                </ul>
                
                <?php } } } ?>
                
                
            </li>        
        
        </ul>
    </div>
       
        
        
        

</div>
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