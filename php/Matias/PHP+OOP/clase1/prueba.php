<?php
include_once("usuario.php");

$usu1= new Usuario("matias", "matias@gmail.com", "matias1234");
var_dump($usu1);
$usu1-> email = 'matiasdi@gmail.com';
var_dump($usu1->email);
echo "<br>";

$usu2= new Usuario("julian", "julian@fdsa", "julian113");
var_dump($usu2);

 ?>
