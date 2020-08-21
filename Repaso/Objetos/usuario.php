<?php
class Usuario
{
  private $id;
  private $email;
  private $pass;
  private $username; 
  private $edad;
  private $pais;
  private $telefono;

  public function __construct($email,$pass,$username,$edad,$pais,$telefono = null)
  {
    $this->email = $email;
    $this->setPass($pass);
    $this->edad = $edad;
    $this->username = $username;
    $this->pais = $pais;
    $this->telefono = $telefono;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
  $this->id = $id;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = password_hash($pass,PASSWORD_DEFAULT);
  }
  public function getPass(){
    return $this->pass;
  }
  public function setEdad($edad){
  $this->edad = $edad;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function setUsername($username){
  $this->username = $username;
  }
  public function getUsername(){
    return $this->username;
  }
  public function setPais($pais){
  $this->pais = $pais;
  }
  public function getPais(){
    return $this->pais;
  }
  public function setTelefono($telefono){
  $this->telefono = $telefono;
  }
  public function getTelefono(){
    return $this->telefono;
  }
  public function guardarImagen() {

  if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
  {

    $nombre=$_FILES["avatar"]["name"];
    $archivo=$_FILES["avatar"]["tmp_name"];

    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
      return "Error";
    }

    $miArchivo = dirname(__FILE__);
    $miArchivo = $miArchivo . "/img/";
    $miArchivo = $miArchivo . $this->getEmail() . "." . $ext;

    move_uploaded_file($archivo, $miArchivo);
  }
}
}
  ?>
