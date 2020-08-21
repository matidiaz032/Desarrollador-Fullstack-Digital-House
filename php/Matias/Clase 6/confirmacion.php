<?php
  switch ($_POST["genero"]) {
    case 'm':
      // code...
      $saludo="Bienvenido";
      break;
    case 'f':
      // code...
      $saludo="Bienvenida";
      break;
    case 'o':
      // code...
      $saludo="Bienvenide";
      break;
    default:
      // code...
      $saludo="Hola";
      break;
  }
  ?>
  <?php
if (!$_POST) {
  header("Location:registro_usuarios.php");
  exit;
}
   ?>
  <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
  Bienvenid<?=$_POST["genero"]=="m"?"o":"a"?> Muchas Gracias por registrarte <?=$_POST["name"]?>. Nos has dicho que tienes <?=$_POST["edad"]?> años, hemos registrado tu email, <?=$_POST["email"]?> ¡Gracias!;
  <!-- <?=$saludo?> -->
  <p>Nos indicaste que tus hobbys son:</p>
  <ul>
    <?php foreach ($_POST["hobbys"] as $hobby):?>
      <li><?= $hobby?></li>
  <?php endforeach?>
  </ul>
  </body>
  </html>
