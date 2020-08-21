<?php
require_once "soporte.php";


abstract class DB{

public abstract function guardarUsuario(Usuario $usuario);
public abstract function traerTodos();
public abstract function traerPorMail($email);

}


 ?>
