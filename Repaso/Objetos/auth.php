<?php
require_once "soporte.php";
require_once 'db.php';

class Auth
{

private $db;
public function __construct(DB $db)
{
$this->db=$db;
}

public function loguear($email) {
 $_SESSION["logueado"] = $email;
  }

public function estaLogueado() {
 return isset($_SESSION["logueado"]);
	}

public function usuarioLogueado() {
	if ($this->estaLogueado()) {
			$mail = $_SESSION["logueado"];
			return $this->db->traerPorMail($mail);
		} else {
			return NULL;
		}

	}

public function logout() {
		session_destroy();
		setcookie("logueado", "", -1);
	}

public function recordame($email) {
		setcookie("logueado", $email, time() + 3600 * 2);
	}
}

