<?php
require_once "../Objetos/auth.php";
$auth->logout();
header("Location:inicio.php");exit;

?>
