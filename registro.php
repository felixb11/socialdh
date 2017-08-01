<?php 
include_once("header.php");

$defaulUsuario = "";
$defaulMail = "";


$errores = [];

	if ($_POST)
		{
			$errores = validarInformacion($_POST);
			if (!isset($errores["username"])) 
			{
				$defaulUsuario = $_POST["username"];
			}
			if (!isset($errores["mail"])) 
			{
				$defaulMail = $_POST["mail"];
			}


		if (count($errores) == 0) 
			{	
			// armo el usuario
			$usuario = armarUsuario($_POST);
			$mail = $_POST["mail"];
			guardarImagen($mail);
			guardarUsuario($usuario);

			traerTodos();exit;

			}
			else
			{
				foreach ($errores as $clave => $valor) 
				{
					echo $valor;
					echo "<br>";
				}
			}
		}
	else
		{
			echo "ingresamos por get";
		}

$pais = ["Argentina","Brasil", "Inglatera", "Canada", "USA", "Francia"]

?>

<h1>Registro de usuario</h1>
<form action="registro.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="username">Usuario</label>
		<input type="text" class="form-control" id="username" name="username" value="<?=$defaulUsuario?>">
	</div>
	<div class="form-group">
		<label for="mail">e-mail</label>
		<input type="email" class="form-control" id="mail" name="mail" value="<?=$defaulMail?>">
	</div>
	<div class="form-group">
		<label for="pwd">Contraseña</label>
		<input type="password" id="pwd" class="form-control" name="pwd">
	
		<label for="c_pwd">Confirmar contraseña</label>
		<input type="password" id="c_pwd" class="form-control" name="c_pwd">
	</div>
			<div class="form-group">
				<label for="avatar">Foto de perfil:</label>
				<input id="avatar" class="form-control" type="file" name="avatar">
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