<?php
require_once "soporte.php";

class Validador
{
  private $db;
  public function __construct(DB $db)
  {
    $this->db = $db;
  }
  function validarInformacion($informacion) {
    $errores = [];

    foreach ($informacion as $clave => $valor) {
      $informacion[$clave] = trim($valor);
    }


    if (strlen($informacion["username"]) <= 3) {
      $errores["username"] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
    }

    if ($informacion["edad"] < 18) {
      $errores["edad"] = "Tenes que tener más de 18 años";
    }

    if (is_numeric($informacion["telefono"]) == false) {
      $errores["telefono"] = "El telefono debe ser un numero";
    }


    if ($informacion["email"] == "") {
      $errores["email"] = "Che, dejaste el mail incompleto";
    }
    else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
      $errores["mail"] = "El mail tiene que ser un mail";
    } else if ($this->db->traerPorMail($informacion["email"]) != NULL) {
      $errores["mail"] = "El usuario ya existia!";
    }

    if ($informacion["password"] == "") {
      $errores["password"] = "No llenaste la contraseña";
    }

    if ($informacion["cpassword"] == "") {
      $errores["cpassword"] = "No llenaste completar contraseña";
    }

    if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"]) {
      $errores["password"] = "Las contraseñas no coinciden";
    }


    return $errores;
  }

  function validarLogin($informacion) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "El mail tiene que ser un mail";
		} else if ($this->db->traerPorMail($informacion["email"]) == NULL) {
			$errores["mail"] = "El usuario no esta en nuestra base";
		}

		$usuario = $this->db->traerPorMail($informacion["email"]);

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario["password"]) == false) {
				$errores["password"] = "La contraseña no verifica";
			}
		}




		return $errores;
	}
}

 ?>
