<?php
$array=[];
for ($i=0; $i <10 ; $i++) {
  // code...
  $array[]=rand(0,10);
}
for ($i=0; $i <count($array) ; $i++) {
  // code...
  $valor="$array[$i]";
  echo "$valor";
  if ($valor = 5) {
    // code...
echo "Se encontro un 5<br>";
  }
}
 ?>
