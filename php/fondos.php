<?php
session_start();
if ($_POST) {
  setcookie("colores",$_POST["colores"]);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color: <?=isset($_COOKIE["colores"])?$_COOKIE["colores"]:"none" ?>">
    <form method="post">
      <label>Colores</label>
      <select name="colores">
        <option value="blue"<?=isset($_COOKIE["colores"]) && $_COOKIE["colores"] == "blue"? "selected":""?>>Azul</option>
        <option value="red"<?=isset($_COOKIE["colores"]) && $_COOKIE["colores"] == "red"? "selected":""?>>Rojo</option>
        <option value="skyblue"<?=isset($_COOKIE["colores"]) && $_COOKIE["colores"] == "skyblue"? "selected":""?>>Celeste</option>
      </select>
      <button type="submit" name="button">Enviar</button>
    </form>
  </body>
</html>
