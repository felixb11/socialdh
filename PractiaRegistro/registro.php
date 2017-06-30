<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
</head>
</head>

<body>

<?php 

if ($_POST) 
{
	echo "Ingreso por post<br>";
}
else
{
	echo "Ingreso por get<br>";
	var_dump($_GET);
}

$paises = [
	"arg" => "argentina",
	 "bra" => "brasil",
	 "uru" => "uruguay"
	 ];

?>


<div class="container">

<form action="registro.php" method="get">

	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" id="nombre" name="nombre">
	</div>
	
	<div class="form-group">
		<label for="apellido">Apellido</label>
		<input type="text" class="form-control" id="apellido" name="apellido">
	</div>
	
	<div class="form-group">
		<label for="mail">e-mail</label>
		<input type="email" class="form-control" id="mail" name="mail">
	</div>

	<div class="form-group">
		<label for="pais">Pais</label>
		<select name="pais" id="pais" class="form-control">

			
			<?php foreach ($paises as $clave => $pais) : ?>
				<?php if ($clave == $_POST["pais"]) : ?>
					<option value="<?= $clave ?>" selected>
						<?=$pais?>
					</option>
				<?php else: ?>
					<option value="<?= $clave ?>">
						<?=$pais?>
					</option>
				<?php endif ?>
			<?php endforeach ?>


		</select>

	</div>
	
	<div class="form-group">
		<label for="pwd">Contraseña</label>
		<input type="password" id="pwd" class="form-control" name="pwd">


		<label for="c_pwd">Confirmar contraseña</label>
		<input type="password" id="c_pwd" class="form-control" name="c_pwd">


	</div>	

	<div class="form-group">
		<input type="submit" class="btn btn-warning" id="boton">
	</div>
				
</form>
</div>	


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--bootstrap-->	
</body>
</html>