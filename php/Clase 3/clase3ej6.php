<?php
$caras= 0;
$tiros= 0;
while ($caras < 5) {
  // code...
  $moneda= rand(0,1);
  $tiros++;
  if ($moneda) {
    // code...
    $caras++;
  }
}
echo "Se hicieron $tiros Tiros";
 ?>
