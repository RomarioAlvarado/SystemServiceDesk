<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
	<form action="validar.php" method="post">
		<h1>Ingreso al Sistema</h1>
		<p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
		<p>Contraseña <input type="password" placeholder="ingrese su Contraseña" name="contraseña"></p>
		<input type="submit" value="Ingresar">

	</form>
</body>
</html>