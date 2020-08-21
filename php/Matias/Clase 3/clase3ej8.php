<?php
$nombres=["matias ","julian ","camila ","mariela ","agustin "];
for ($i=0; $i < count($nombres); $i++) {
  // code...
  echo "$nombres[$i]";
}
echo "<br>";
$i= 0;
while ($i < count($nombres)) {
  // code...
  echo "$nombres[$i]";
  $i++;

}
echo "<br>";
$i= 0;
do {
  // code...
  echo "$nombres[$i]";
  $i++;
} while ($i < count($nombres));
echo "<br>";
foreach ($nombres as $nombre) {
  // code...
  echo "$nombre";
}
echo "<br>";
$miAuto=[
  "Patente"=>"AA 123 HB",
  "Marca"=>"Ford"
];
foreach ($miAuto as $llave => $valor) {
  // code...
  echo "La $llave es $valor ";
}
 ?>
