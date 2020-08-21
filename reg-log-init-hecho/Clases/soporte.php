<?php

require_once "auth.php";
require_once "db_json.php";
require_once "db_sql.php";
require_once "DB.php";
require_once "usuario.php";
require_once "validador.php";


$dbType = "mysql";
switch ($dbType) {
  case 'mysql':
  $db = new DB_SQL();
    break;

    case 'json':
    $db = new DB_JSON();
      break;
}

$auth = new Auth($db);
$validador = new Validador($db);

session_start();
require_once "pdo.php";

if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
  $_SESSION["logueado"] = $_COOKIE["logueado"];
}
