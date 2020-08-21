<?php
include 'conexion.php';
$db = iniciarconexion();

$query= $db->query('SELECT * FROM movies');
$results= $query -> fetchAll (PDO::FETCH_ASSOC);
var_dump($query);
 ?>
