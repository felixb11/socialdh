<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro Usuarios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">

	<form action="confirmacion.php" method="get">
		<div class="form-group">
			<label for="nombre">Nombre Completo</label>
			<input type="text" class="form-control" id="nombre" name="nombre">
		</div>

		<div class="form-group">
			<label for="mail">e-mail</label>
			<input type="email" class="form-control" id="mail" name="mail">
		</div>	

		<div class="form-group">
			<label for="psw">Clave</label>
			<input type="password" class="form-control" name="psw" id="psw">
		</div>	

		<div class="form-group">
			<label for="c_psw">Repita Clave</label>
			<input type="password" class="form-control" name="c_psw" id="c_psw">
		</div>	

		<input type="submit" class="btn btn-warnig" id="boton" value="Boton">

	</form>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>	
</body>
</html>