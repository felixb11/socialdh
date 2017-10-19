<?php 
require_once("db.php");
require_once("usuario.php");
/**
* 
*/
class DBMySQL extends DB
{
	private $db;

	public function __construct()
	{
		$dsn = 'mysql:host=localhost;dbname=socialdh;charset=utf8mb4;port=3306';
		$user ="root";
		$pass = "";

		try {
		  		$this->db = new PDO($dsn, $user, $pass);
			} 
			catch (Exception $e) 
			{  
				echo "La conexion a la base de datos falló: " . $e->getMessage();
			}
	}

	public function guardarUsuario(Usuario $usuario){
	
		$query = $this->db->prepare("INSERT INTO usuario VALUES(default, :user, :mail, :pwd, :foto)");
		$query->bindValue(":user",$usuario["username"]);
		$query->bindValue(":mail",$usuario["mail"]);
		$query->bindValue("pwd",$usuario["pwd"]);
		$query->bindValue("foto",NULL);

		$id = $this->db->lastInsertId();
		$usuario= setId($id);

		$query->execute();

		return $usuario;
		}

	public function traerTodos(){
		$query = $this->db->prepare("select * from usuario");
		$query->execute();

		$arrayFinal = [];

		$usuarios = $query->fetchAll();

		foreach ($usuarios as $usuario) {
			$arrayFinal[] = new Usuario($usuario);
		}
		return $arrayFinal;
		}

	public function traerPorMail($mail){

		$query = $this->db->prepare('SELECT * FROM usuario WHERE :email = email');
	 	$query->bindValue(":email", $mail);

		$query->execute();

		$usuario = $query->fetch();

	    if ($usuario != null) {
	      return new Usuario($usuario);
	    }
	    else {
	      return null;
	    }
		}
}
?>