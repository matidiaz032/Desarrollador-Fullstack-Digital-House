<?php

$nombre = $_POST['nombre'];

setcookie('nombre', $nombre, time()+4800);

if (setcookie($nombre)) {
    echo "cookie guardada";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <br>
      <a href="leerCookie.php" >Ver la cookie</a>
</body>
</html>
