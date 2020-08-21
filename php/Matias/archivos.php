<?php
$archivo=fopen("texto.txt","w+");
if (file_exists("texto.txt")) {
   fopen("texto.txt","r+");
 }
 else {
     fopen("texto.txt","w+");
     }
for ($i=0; $i < 100 ; $i++) {
  fwrite($archivo,"Hola mundo! testing.\n");
}
fclose($archivo);
 ?>
