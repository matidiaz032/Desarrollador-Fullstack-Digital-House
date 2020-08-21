<?php
require_once "../Objetos/usuario.php";
require_once "../Objetos/db_sql.php";

$json = file_get_contents('usuarios.json');

$data = json_decode($json, true);
//var_dump($json);

foreach ($data as $row) {
    
//print_r($row);

    $email = $row['email'];
    $password = $row['password'];
    $edad = $row['edad'];
    $username = $row['username'];
    $pais = $row['pais'];
    
    //var_dump($email . "<br>");
    
    $usuariosJson = new Usuario($email = $row["email"],
    $password = $row["password"],
    $edad = $row["edad"],
    $username = $row["username"],
    $pais = $row["pais"]); 

    var_dump($row);
}

 
?>