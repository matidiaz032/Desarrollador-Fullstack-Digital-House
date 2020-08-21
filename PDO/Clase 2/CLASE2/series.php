<?php
include_once 'conexion.php';
$db=conectarse();
$query=$db->prepare('SELECT * FROM series WHERE id ORDER BY id;');
$query->execute();
$results=$query->fetchAll(PDO::FETCH_ASSOC);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-image:url(fondo.gif);">
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Series: </h1>
    <div style="padding-top:35px;">
      <ul>
        <?php foreach ($results as $result): ?>
        <a href="ejercicio2.php?id=<?=$result['id']?>" style="margin-right:50px;text-decoration: none; color: crimson;"><li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;"><?= $result['title'];?></li></a>
        <?php endforeach;?>
      </ul>
    </div>



  </body>
</html>
