<?php
include 'conexion.php';
$db = iniciarconexion();
$idSerie = $_GET['id'];
$query= $db->prepare("SELECT * FROM series WHERE id = $idSerie");
$query->execute();
$result=$query->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <a href="series.php">Volver a Series</a>
      <ul>
          <li>Titulo: <?= $result['title']?></li>
          <li>Fecha de Estreno: <?= $result['release_date']?></li>
      </ul>
  </body>
</html>
