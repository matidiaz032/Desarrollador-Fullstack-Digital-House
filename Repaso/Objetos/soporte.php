<?php
require_once "pdo.php";
require_once "db_sql.php";
require_once "db_json.php";
require_once "auth.php";
require_once "validador.php";
require_once "usuario.php";
require_once "db.php";

$dbType = "mysql";

switch ($dbType) {
  case 'mysql':
    $db = new db_sql();
    break;

  case 'json':
  $json=new db_json("usuarios.json");
  break;
}

$auth = new Auth($db);
$validacion = new Validador($db);

session_start();

	if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
		$_SESSION["logueado"] = $_COOKIE["logueado"];
	}
