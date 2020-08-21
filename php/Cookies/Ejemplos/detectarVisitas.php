<?php
	if(isset($_COOKIE['visita'])){
		echo"Qué alegría verte de nuevo por aquí!!";
	} else {
		setcookie('visita', 'ok', time()+31536000);
		echo"Bienvenido a mi página por primera vez";
	}
?>
<html>
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>
	</body>
</html>