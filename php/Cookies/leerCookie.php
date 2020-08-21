<html>
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>

		<?php
			if (isset($_COOKIE['nombre'])) {
                echo "La cookie tiene el valor: ".$_COOKIE['nombre'];
			} else {
				echo "La cookie no ha podido ser encontrada!!";
			}
		?>
        <br>
		<a href="borrarCookie.php" >Borrar la cookie</a><br>
        <a href="crearCookie.php" >Volver a crear la cookie</a>
	</body>
</html>