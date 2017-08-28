<?php 
session_start();
require_once("pdo.php");

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
		// Valido el e-mail
		if ($info["mail"] == "") 
			{
				$errores["mail"] = "El mail no puede ser nulo gil";
			}
			elseif (filter_var($info["mail"],FILTER_VALIDATE_EMAIL) == false) 
			{
				$errores["mail"] = "El mail tiene que ser un mail";
			}
			elseif (traerPorMail($info["mail"]) != NULL) 
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
		// $jsonUsuario = json_encode($usuario); 
		// file_put_contents("usuario.json", $jsonUsuario . PHP_EOL, FILE_APPEND);
		global $db;
		// preparo la query
		$query = $db->prepare("INSERT INTO usuario VALUES(default, :user, :mail, :pwd, :foto)");
		$query->bindValue(":user",$usuario["username"]);
		$query->bindValue(":mail",$usuario["mail"]);
		$query->bindValue("pwd",$usuario["pwd"]);
		$query->bindValue("foto",NULL);

		$id = $db->lastInsertId();
		$usuario["id"] = $id;

		$query->execute();

		return $usuario;

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
		global $db;

		$query = $db->prepare("Select * from usuario");
		$query->execute();

		return $query->fetchAll();
	}

function traerTodosJson() {
		$archivoJSON = file_get_contents("usuario.json");

		$arrayDeJSONS = explode(PHP_EOL, $archivoJSON);

		array_pop($arrayDeJSONS);

		$arrayFinal = [];

		foreach ($arrayDeJSONS as $json) {
			$arrayFinal[] = json_decode($json, true);
		}

		return $arrayFinal;
	}

function traerPorMail($mail)
	{
		global $db;

		$query = $db->prepare("SELECT * FROM usuario WHERE email = :mail");
		$query->bindValue(":mail", $mail);

		$query->execute();

		return $query->fetch();
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