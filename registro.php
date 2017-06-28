<?php 
?>
<h1>Registro de usuario</h1>
<form action="">
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" id="nombre">
	</div>
	
	<div class="form-group">
		<label for="apellido">Apellido</label>
		<input type="text" class="form-control" id="apellido">
	</div>
	
	<div class="form-group">
		<label for="mail">e-mail</label>
		<input type="email" class="form-control" id="mail">
	</div>
	
	<div class="form-group">
		<label for="pwd">Contraseña</label>
		<input type="password" id="pwd" class="form-control">
	
		<label for="r_pwd">Repetir contraseña</label>
		<input type="password" id="r_pwd" class="form-control">
	</div>	

	<div class="form-group">
		<input type="submit" class="btn btn-defaul" id="boton">
	</div>
				
</form>