<?php
$json= file_get_contents("categorias.json");
$categorias= json_decode($json,true);
$categorias= $categorias["categorias"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
 <body>
  <form action="index.html" method="post">
    <?php foreach ($categorias as $categoria):?>
    <label> <?= $categoria["nombre"] ?> </label>
    <input type="checkbox" name="" value="<?= $categoria["id"] ?>">
  <?php endforeach ?>
  </form>
 </body>
</html>
