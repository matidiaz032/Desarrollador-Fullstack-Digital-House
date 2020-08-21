<?php
require_once "soporte.php";
require_once "DB.php";



class DB_JSON extends DB{
  private $archivo;
  public function guardarUsuario(Usuario $usuario) // Guardo en un json el usuario creado en el constructor de la clase usuario
{
    /*$usuarioArray = array('id' => $usuario->getId(), 'email' => $usuario->getEMail(), 'password' => $usuario->getPassword(), 'edad' => $usuario->getEdad(), 'username' => $usuario->getUsername(), 'pais' => $usuario->getPais(), 'telefono' => $usuario->getTelefono());*/
    $usuarioJson = json_encode($usuario);
    file_put_contents('datos.json', $usuarioJson . PHP_EOL, FILE_APPEND);
}

  public function traerTodos() //Leo la base de datos y la guardo en la variable $baseJson y a todos los usuarios en $users, c/u en un $user.
                          //Luego decodifico cada $user y lo guardo dentro de $arrayUsers
{
    $baseJson = file_get_contents('datos.json');
    $users = explode(PHP_EOL, $baseJson);
    array_pop($users);

    foreach($users as $user) {
        $arrayUsers[] = json_decode($user, true);
    }
    return $arrayUsers;
}
  public function traerPorMail($email)//Busco si existe en la base de datos un email que coincida con el ingresado
{
    $arrayDeUsuariosTraidos = traerTodos();
    foreach($arrayDeUsuariosTraidos as $user) {
        if($user['email'] == $email) {
            return $user;
        }
    }
    return null;
}
}

 ?>
