
<?php 
include_once("funciones.php");
include_once("pdo.php");
include_once("header.php");

// 1 conectar a la base
// 2 crear las tablas
// 3 agarrar el json y cargar los datos en la tabla creada


// $sql = "CREATE TABLE `usuario` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `username` varchar(45) NOT NULL,
//   `email` varchar(45) NOT NULL,
//   `pwd` varchar(100) DEFAULT NULL,
//   `foto` varchar(45) DEFAULT NULL,
//   PRIMARY KEY (`id`),
//   UNIQUE KEY `email_UNIQUE` (`email`),
//   UNIQUE KEY `username_UNIQUE` (`username`)
// ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1";
// $query = $db->prepare($sql);
// $query->execute();
// $db=NULL;

?> 
	<h1>Estoy en la migracion</h1>
<?php

$elJson=traerTodosJson();

echo "<br>";

foreach ($elJson as $key => $valor) 
{
	// $user = guardarUsuario($valor);
	echo $valor["username"]. " " .$key;
	echo "<br>";
}

?>