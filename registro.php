<?php 
include_once("header.php");
	
if ($_POST)
{
	echo "Ingresamos por post";
	var_dump($_POST);
}
else
{
	echo "ingresamos por get";
}

$pais = ["Argentina","Brasil", "Inglatera", "Canada", "USA", "Francia"]

?>

<h1>Registro de usuario</h1>
<form action="index.php" method="post">
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

<div id="footer" class="container"> 
<?php 
include_once ("footer.php");
?>
</div>