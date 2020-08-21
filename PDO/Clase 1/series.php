<?php
include 'conexion.php';
$db = iniciarconexion();

$query= $db->prepare('SELECT * FROM series');
$query->execute();
$result=$query->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <ul>
        <?php foreach ($result as $resultado):?>
          <a href="serie.php?id=<?=$resultado['id']?>"><li><?= $resultado['title']?></li></a>
        <?php endforeach ?>
      </ul>

    </div>
  </body>
</html>
