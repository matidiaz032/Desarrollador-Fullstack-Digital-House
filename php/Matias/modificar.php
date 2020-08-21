<?php
session_start();
if ($_POST) {
switch ($_POST["enviar"]) {
  case "Incrementar":
  if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"]=1;
  } else {
    $_SESSION["contador"] ++;
  }
    break;
  case "Reinicar":
    $_SESSION["contador"]=0;
    break;
  default:
    break;
}
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form method="post">
  <button type="submit" name="enviar" value="Reinicar">Reiniciar</button>
  <button type="submit" name="enviar" value="Incrementar">Incrementar</button>
</form>
  </body>
</html>
