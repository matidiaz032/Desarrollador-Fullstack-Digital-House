<?php

	include_once "../Objetos/soporte.php";

	if ($auth->estaLogueado()) {
		header("Location:inicio.php");exit;
	}

	$emailDefault = "";
	$edadDefault = "";
	$usernameDefault = "";
	$telefonoDefault = "";

	$paises = [
		"Arg" => "Argentina",
		"Br" => "Brasil",
		"Co" => "Colombia",
		"Fr" => "Francia"
	];

	$errores = [];
	if ($_POST) {
		$errores = $validacion->validarInformacion($_POST);

		if (!isset($errores["email"])) {
			$emailDefault = $_POST["email"];
		}

		if (!isset($errores["edad"])) {
			$edadDefault = $_POST["edad"];
		}

		if (!isset($errores["username"])) {
			$usernameDefault = $_POST["username"];
		}

		if (!isset($error["telefono"])) {
			$telefonoDefault = $_POST["telefono"];
		}

		if (count($errores) == 0) {
			$usuario = new Usuario($_POST['email'], $_POST['telefono'], $_POST['pais'], $_POST['edad'], $_POST['username'], $_POST['password']);
			
			$mail = $usuario->getEmail();
			$usuario->guardarImagen();
			$db->guardarUsuario($usuario);

			header("Location:perfilUsuario.php?mail=$mail");exit;
		}
	}

	include("header.php");
?>

<div class="jumbotron">
	<h1>Registración</h1>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<ul class="errores">
		<?php foreach ($errores as $error) : ?>
			<li>
				<?=$error?>
			</li>
		<?php endforeach; ?>
		</ul>
		<form method="POST" action="register.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email" value="<?=$emailDefault?>">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" value="<?=$usernameDefault?>">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input class="form-control" type="number" name="telefono" id="telefono" value="<?=$telefonoDefault?>">
			</div>
			<div class="form-group">
				<label for="edad">Edad</label>
				<input class="form-control" type="number" name="edad" id="edad" value="<?=$edadDefault?>">
			</div>
			<div class="form-group">
				<label for="pais">Pais:</label>
				<select id="pais" class="form-control" name="pais">
					<?php foreach ($paises as $clave => $pais) : ?>
						<?php if ($clave == $_POST["pais"]) : ?>
							<option value="<?=$clave?>" selected>
								<?=$pais?>
							</option>
						<?php else: ?>
							<option value="<?=$clave?>">
								<?=$pais?>
							</option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" class="form-control" type="password" name="password">
			</div>
			<div class="form-group">
				<label for="cpassword">Confirmar Password</label>
				<input id="cpassword" class="form-control" type="password" name="cpassword">
			</div>
			<div class="form-group">
				<label for="avatar">Foto de perfil:</label>
				<input id="avatar" class="form-control" type="file" name="avatar">
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit">
			</div>
		</form>
	</div>
</div>
<?php include("footer.php"); ?>
