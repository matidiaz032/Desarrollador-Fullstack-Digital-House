<?php
include 'conexion.php';
$db = iniciarconexion();


$query= $db->query('SELECT * FROM genres');
$results= $query -> fetchAll (PDO::FETCH_ASSOC);
var_dump($results);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><?php foreach ($results as $result) {
        var_dump($result) ;
      }  endforeach?></li>
    </ul>
  </body>
</html>
