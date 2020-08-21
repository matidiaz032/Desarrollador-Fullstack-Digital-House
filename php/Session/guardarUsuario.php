<?php
session_start();
$_SESSION['nombre'] = $_POST['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardarUsuario.php" method="post">
       <label>Ingrese su nombre:</label>
       <input type="text" name="name">
       <input type="submit">
    </form>
    <a href="leerUsuario.php">Leer Usuario</a>
</body>
</html>