<?php

require_once "DB.php";
require_once "usuario.php";


class DB_SQL extends DB{
  private $db;

  public function __construct(){
    $dsn = 'mysql:host=localhost;dbname=reglog;
    charset=utf8mb4;port=3306';
    $user = "root";
    $pass = "";
    $opt = [PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION];
    try {
      $this->db = new PDO($dsn, $user, $pass, $opt);
    } catch (Exception $e) {
      echo "La conexion a la base de datos falló: " . $e->getMessage();
    }
  }

  public 	function guardarUsuario(Usuario $usuario) {
  		$db=$this->db;
  		$query = $db->prepare("Insert into usuarios (
        email,
        password,
        edad,
        pais,
        username
        ) values(
          :email,
          :password,
          :edad,
          :pais,
          :username
          )");

  		$query->bindValue(":email", $usuario->getEMail());
  		$query->bindValue(":password", $usuario->getPassword());
  		$query->bindValue(":edad", $usuario->getEdad());
  		$query->bindValue(":username", $usuario->getUsername());
  		$query->bindValue(":pais", $usuario->getPais());

  		$id = $db->lastInsertId();
      $usuario->setId($id);

  		$query->execute();

  		return $usuario;

  	}
  public function traerTodos() {
		$db=$this->db;

		$query = $db->prepare("Select * from usuarios");
		$query->execute();

		return $query->fetchAll();
	}
  public function traerPorMail($email) {
  		$db=$this->db;

  		$query = $db->prepare("Select * from usuarios where email = :email");
  		$query->bindValue(":email", $email);

  		$query->execute();

  		return $query->fetch();
  	}
}
