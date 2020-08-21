<?php
  require_once "Clases/soporte.php";
  if (!$auth->estaLogueado()) {
    header("Location:inicio.php");exit;
  }

  $usuarioLogueado = $auth->usuarioLogueado();

  $nombre = $usuarioLogueado["username"];

?>
<?php include("header.php"); ?>

<h1>Inicio</h1>
<h2>Bienvenido <?=$nombre?> a tu perfil</h2>


<?php include("footer.php"); ?>
