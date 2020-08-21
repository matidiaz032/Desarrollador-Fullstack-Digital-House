
<?php
$nombreDelUsuario="admin";
$contraseniaDelUsuario=1234;
if ($nombreDelUsuario=="admin" && $contraseniaDelUsuario==1234) {
  // code...
  echo "Bienvenido";
} else if (empty($nombreDelUsuario || $contraseniaDelUsuario)) {
  // code...
  echo "Los campos deben estar llenos";
} {
  // code...
  echo "Error en el login.";
}
 ?>
