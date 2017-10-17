<?php 
require_once("usuario.php");

/**
* Solo pongo funciones abstractas para forzar a contruirlas en otras clases
*/
abstract class DB
{
	public abstract function guardarUsuario(Usuario $usuario);
	public abstract function traerTodos();
	public abstract function traerPorMail($email);
}

?>