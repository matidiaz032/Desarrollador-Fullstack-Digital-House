<?php
function hashear($clave){
  echo $clave;
  echo "<br>";
  echo md5($clave);
  echo "<br>";
  echo sha1($clave);
  echo "<br>";
  echo password_hash("hola",PASSWORD_DEFAULT);
  echo "<br>";
  echo password_hash("hola",PASSWORD_BCRYPT);
  }
  hashear("hola");
 ?>
