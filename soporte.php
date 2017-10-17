<?php 
require_once("clases/auth.php");
require_once("clases/validador.php");
require_once("clases/DBMySQL.php");
require_once("clases/DBJSON.php");

$auth = new Auth();
//loguear
//estaLogueado
//usuarioLogueado
//recordame
//logaut

$validador = new Validador();
//validar informacion
//validar loguin

$db = new DBMySQL();
//guardarUsuario
//traerTodos
//traerPorMail

?>