<?php
$tiros=0;
do {
  // code...
  $moneda= rand(0,1);
  $tiros++;
} while (!$moneda);
echo "Se hicieron $tiros Tiros";
 ?>
