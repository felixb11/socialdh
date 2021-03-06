<?php 
require_once("db.php");

/**
* 
*/
class Validador
{
	public function validarInformacion($info, DB $db){
		$errores = [];
		foreach ($info as $clave => $valor) 
			{
				// saco los espacios en blanco de las puntas
				$info[$clave] = trim($valor); 
			}
			// que el username tenga mas de 3 caracteres
		if (strlen($info["username"]) <= 3) 
			{
				$errores["username"] = "Debe ingresar mas de 3 caracteres";
			}
		// Valido el e-mail
		if ($info["mail"] == "") 
			{
				$errores["mail"] = "El mail no puede ser nulo gil";
			}
			elseif (filter_var($info["mail"],FILTER_VALIDATE_EMAIL) == false) 
			{
				$errores["mail"] = "El mail tiene que ser un mail";
			}
			elseif ($db->traerPorMail($info["mail"]) != NULL) 
			{
				$mail = $info["mail"];
				$errores["mail"] = "El mail ya existe";
				header("Location:ingreso.php?mail=$mail");
			}

			// Valido el password

			if ($info["pwd"] == "")
				{ $errores["pwd"] = "El password no puede se nullo";}
			if ($info["c_pwd"] == "")
				{ $errores["c_pwd"] = "La confirmación del PASSWORD no puede ser nula";}
			if ($info["pwd"] != "" && $info["c_pwd"] != "" && $info["pwd"] != $info["c_pwd"])
				{ $errores["pwd"] = "Las contraseñas no coinciden";}

		return $errores;
	}

	public function validarLogin($informacion, DB $db){
		$errores = [];
		foreach ($informacion as $clave => $valor) 
		{
			$informacion[$clave] = trim($valor);

			if ($informacion["mail"] == "") 
			{
				$errores["mail"] = "El e-mail no puede estar vacio";
			}
			elseif (filter_var($informacion["mail"], FILTER_VALIDATE_EMAIL) == false) 
			{
				$errores["mail"] = "El mail tiene que ser un mail";
			}
			elseif ($db->traerPorMail($informacion["mail"]) == NULL) 
			{
				$errores["mail"] = "El usuario no esta en nuestra base";
			}

			$usuario = $db->traerPorMail($informacion["mail"]);

			if ($informacion["pwd"] == "") 
			{
				$errores["pwd"] = "El passweord no puede estar vacio";
			}
		}

		return $errores;
	}	
}
?>