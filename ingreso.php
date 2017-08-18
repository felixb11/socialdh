<?php 
include_once("header.php");
$defaultMail = "";
  if (estaLogueado()) 
  	{	
		header("Location:index.php");
	}

	$errores = [];
	if ($_POST) 
	{
		$errores = validarLogin($_POST);
		if (count($errores) == 0) 
			{// LOGUEAR
      		loguear($_POST["mail"]);
      		if (isset($_POST["recordame"])) 
      			{//Quiere que lo recuerde
					recordame($_POST["mail"]);
				}
      		header("Location:index.php");
			}
	}
?>
<h1>INGRESO</h1>

<div class="row">
<div class="col-xs-6">
<form method="POST" action="ingreso.php" enctype="multipart/form-data">
	<div class="form-group">
		<label for="mail">e-mail</label>
		<input type="email" class="form-control" id="mail" name="mail" value="<?=$defaultMail?>">
	</div>

	<div class="form-group">
		<label for="pwd">Contraseña</label>
		<input type="password" id="pwd" class="form-control" name="pwd">
	</div>	

	<div class="form-group">
		<label for="recordarme">Recordarme</label>
		<input type="checkbox" name="recordarme">
	</div>	

	<div class="form-group">
		<input type="submit" class="btn btn-warning" id="boton">
	</div>
				
</form>
</div>
<div class="col-xs-6">
	
</div>
</div>


<div id="footer" class="container"> 
<?php 
include_once ("footer.php");
?>
</div>