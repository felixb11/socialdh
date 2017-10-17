<?php 
require_once("soporte.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
		<title>Comunidad Deportiva </title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
		<link rel="stylesheet" href="css/bootstrap.css">

		<link rel="stylesheet" href="css/styles.css">	

		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container-fluid">
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fuid cont-nav">
				<!-- Menu para moviles-->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">SocialDH</a>
				</div>
				<!--Menu grande-->
				<div class="collapse navbar-collapse" id="navbar-1">
				 	<ul class="nav navbar-nav navbar-right">
				 		<li><a href="index.php">Inicio</a></li>
				 		<li><a href="migracion.php">Migración</a></li>
				 		<li><a href="index.php#preguntas">Preguntas</a></li>
				 		<!-- <li><a href="registro.php">Registro</a></li> -->

						
				<?php if ($auth->estaLogueado()): ?>
				 		<li><a href="salir.php">Salir</a></li>
				<?php else: ?>
						<li><a href="registro.php">Registro</a></li>
						<li><a href="ingreso.php">Ingreso</a></li>
				<?php endif ?>
				 	</ul>
				<!--Pongo una barra de busqueda-->
					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Buscar">
						</div>		
					</form>
				</div>
			</div>
		</nav>
	</header>
</div>

