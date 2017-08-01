<?php 

session_start();

	if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) 
	{
		$_SESSION["logueado"] = $_COOKIE["logueado"];
	}

function validarInformacion($info)
	{
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

		if ($info["mail"] == "") 
			{
				$errores["mail"] = "El mail no puede ser nulo gil";
			}

		return $errores;		
	}

function armarUsuario($datos) 
	{
		$usuario = [
			"username" => $datos["username"],
			"mail" => $datos["mail"],
			"pwd" => password_hash($datos["pwd"], PASSWORD_DEFAULT),
		];
		return $usuario;
	}

function guardarUsuario($usuario)
	{
		// convierto el array $usuario en un JSON
		$jsonUsuario = json_encode($usuario); 

		file_put_contents("usuario.json", $jsonUsuario . PHP_EOL, FILE_APPEND);

	}	

function guardarImagen($mail) 
	{
	
		if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
		{

			$nombre=$_FILES["avatar"]["name"];
			$archivo=$_FILES["avatar"]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
				return "Error";
			}

			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/images/";
			$miArchivo = $miArchivo . $mail . "." . $ext;

			move_uploaded_file($archivo, $miArchivo);
		}
	}

function traerTodos()
	{
		$archivoJSON = file_get_contents("usuario.json");
		// cargo el archivo JSON en una variable
		$arrayDeJSON = explode(PHP_EOL, $archivoJSON);
		// divido la variable en varios arreglos de JSON
		array_pop($arrayDeJSON);
		// elimina el ultimo elemento de la matriz

		$arrayFinal = [];

		foreach ($arrayDeJSON as $json) 
		{
			$arrayFinal[] = json_decode($json,true);
		}
		return $arrayFinal;
	}

function traerPorMail($mail)
	{
		$usuarios = traerTodos();

		foreach ($usuarios as $usuario) 
		{
			if ($usuario["mail"] == $mail)
			{
				return $usuario;
			}
		}
		return NULL;
	}

function validarLogin($informacion)
	{
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
			elseif (traerPorMail($informacion["mail"]) == NULL) 
			{
				$errores["mail"] = "El usuario no esta en nuestra base";
			}

			$usuario = traerPorMail($informacion["mail"]);
			echo "El usuario es: ";
			var_dump($usuario) ;

			if ($informacion["pwd"] == "") 
			{
				$errores["pwd"] = "El passweord no puede estar vacio";
			}
		}

		return $errores;
	}

function loguear($email) 
	{
		$_SESSION["logueado"] = $email;
	}

function estaLogueado() 
	{
		return isset($_SESSION["logueado"]);
	}

function usuarioLogueado() 
	{
		if (estaLogueado()) 
		{
			$mail = $_SESSION["logueado"];
			return traerPorMail($mail);
		} 
		else 
		{
			return NULL;
		}
	}		

function logout()
	{
		session_destroy();
		setcookie("logueado", "", -1);		
	}

function recordame($email) 
	{
		setcookie("logueado", $email, time() + 3600 * 2);
	}


?>