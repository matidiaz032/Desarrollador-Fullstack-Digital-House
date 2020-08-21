<?php
require_once "soporte.php";
require_once "db.php";

abstract class db_json extends db
{
  private $archivo;

   public function guardarUsuario($usuario){
      $jsonUsuario = json_encode($usuario);

      file_put_contents('datos.json',$jsonUsuario. PHP_EOL, FILE_APPEND);
  }


  public function traerTodos() {
		$baseJson = file_get_contents('datos.json');
    $users = explode(PHP_EOL, $baseJson);
    array_pop($users);

    foreach ($users as $user) {
      $arrayUsers[] = json_decode($user,true);
    }
    return $arrayUsers;
	}


  public function traerPorMail($email){
    $arrayDeUsuariosTraidos = $this->traerTodos();
  foreach ($arrayDeUsuariosTraidos as $user) {
    if ($user['email'] == $email) {
      return $user;
    }
  }
  return null;
  }
}

 ?>
