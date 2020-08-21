<html>
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>

		<?php
		if ($_GET[error] == "si") {
			echo "Tu usuario o/y tu contraseña no son correctos, inténtalo de nuevo.<br/><br/>";
		}
		elseif ($_GET[error] == "fuera") {
			echo "No puedes entrar directamente en esta página.  Introduce usuario y contraseña.<br/><br/>";
		}
		?>

		<form action="comprobarFormulario.php" method="post">
			<label>Nombre de Usuario</label>
			<input type="text" name="nombre" placeholder="Tu Nombre!!" />

			<label>Tu Contraseña</label>
			<input type="password" name="pass" />

			<br/>
			<input type="submit" value="Entrar!" />
		</form>

	</body>
</html>