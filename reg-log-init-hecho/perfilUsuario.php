<?php


	require_once "Clases/soporte.php";

  $mailABuscar = $_GET["mail"];

  $usuario = $db->traerPorMail($mailABuscar);

  if ($usuario == null) {
    header("Location:inicio.php");exit;
  }

  $img = glob("img/romi@dh.com.*")[0];

  unset($usuario["password"]);

	include("header.php");
?>

<div class="jumbotron">
	<h1>Perfil de usuario</h1>
  <img src="<?=$img?>" alt="" width="400">
</div>
<ul>
  <?php foreach($usuario as $prop => $valor) : ?>
    <li>
      <?=$prop?> : <?=$valor?>
    </li>
  <?php endforeach; ?>
</ul>

<?php include("footer.php"); ?>
