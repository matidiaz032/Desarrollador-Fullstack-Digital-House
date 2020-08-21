<?php
include 'conexion.php';
$db = iniciarconexion();
$queryGenres = $db->query("SELECT id,name FROM genres");
$genres = $queryGenres->fetchAll();

// if (isset($_POST['submit'])){
  $Titulo = $_POST['title'];
  $Rating = $_POST["rating"];
  $Premios = $_POST["awards"];
  $Duracion = $_POST["lenght"];
  $FechaEstreno = $_POST["year"]."-".$_POST["month"]."-".$_POST["day"];
  $Genero = $_POST ["genre_id"];
  try {
    $query = $db->prepare("INSERT INTO movies VALUES (default, null, null, :titulo, :rating, :premios, :estreno, :duracion, :genero)");

    $query->bindValue(":titulo", $Titulo);
    $query->bindValue(":rating", $Rating);
    $query->bindValue(":premios", $Premios);
    $query->bindValue(":estreno", $FechaEstreno);
    $query->bindValue(":duracion", $Duracion);
    $query->bindValue(":genero", $Genero);

    $query->execute();
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
// }
?>
