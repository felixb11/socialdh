<?php 

// 1 conectar a la base
// 2 crear las tablas
// 3 agarrar el json y cargar los datos en la tabla creada

include_once("pdo.php");

$sql = "CREATE TABLE `nuevoUsuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1";

$query = $db->prepare($sql);
$query->execute();

$db=NULL;



?>