<?php 

/**
Esta es la clase usuario
*/
class Usuario{
	private $id;
	private $username;
	private $email;
	private $pwd;
	private $edad;
	private $pais;

	public function __construct($datos){
		if (isset($datos["id"])) {// Un usuario registrado
			$this->id = $datos["id"];
			$this->pwd = $datos["pwd"];			
		} else {
			$this->pwd = password_hash($datos["pwd"], PASSWORD_DEFAULT);
		}
		$this->username = $datos["username"];
		$this->email = $datos["email"];
		// $this->edad = $datos["edad"];
		// $this->pais = $datos["pais"];
	}

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getUsername(){
		return $this->username;
	}
	public function setUsername($usename){
		$this->username = $username;
	}
	public function getMail(){
		return $this->email;
	}
	public function setMail($mail){
		$this->email = $mail;
	}
	public function getPwd(){
		return $this->pwd;
	}
	public function setPwd($pwd){
		$this->pwd = $pwd;
	}

	public function guardarImagen(){
			$nombre=$_FILES["avatar"]["name"];
			$archivo=$_FILES["avatar"]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/images/";
			$miArchivo = $miArchivo . $mail . "." . $ext;

			move_uploaded_file($archivo, $miArchivo);		
	}
	}
?>