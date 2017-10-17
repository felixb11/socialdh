<?php 

/**
Esta es la clase usuario
*/
class Usuario{
	private $id;
	private $username;
	private $mail;
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
		$username->username = $datos["username"];
		$mail->mail = $datos["mail"];
		$edad->edad = $datos["edad"];
		$pais->pais = $datos["pais"];
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
		return $this->mail;
	}
	public function setMail($mail){
		$this->mail = $mail;
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