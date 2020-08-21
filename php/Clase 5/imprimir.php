<?php
var_dump($_POST);
echo $_POST['nombre']."<br>";
foreach ($_POST as $llave => $valor) {
  // code...
   echo "$llave : $valor <br>";
}
 ?>
