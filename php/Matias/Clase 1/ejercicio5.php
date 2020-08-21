<?php
$auto=["marca"=>"Volkswagen",
"color"=>"Rojo",
"anio"=>"2019",
"patente"=>"IPI367"];

echo var_dump($auto)."<br>";

$auto[0]="Matias";
$auto[14]="La Caja Seguros";
$auto["Poliza"]=100001245;
$auto["patente"]="ABC218";

echo var_dump($auto)."<br>";

$auto[0]="Ezequiel";

echo var_dump($auto)."<br>";

?>
