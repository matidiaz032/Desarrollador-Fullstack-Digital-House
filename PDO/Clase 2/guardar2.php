<?php
include 'conexion.php';
$db = iniciarconexion();

/*$titulo = ['title'];
$temporadas = ['serie_id'];*/

$idSerie = $_GET['id'];

$querySeasons = $db->query("SELECT seasons.title FROM series, seasons, episodes WHERE serie_id = series.id AND series.id = $idSerie");
$seasons = $querySeasons->fetchAll(PDO::FETCH_ASSOC);

$queryEpisodes = $db->query("SELECT episodes.title FROM seasons, episodes WHERE season_id = seasons.id");
$episodes = $queryEpisodes->fetchAll(PDO::FETCH_ASSOC);

/*$stmtSeasons->bindValue(":temporadas",$temporadas);
$stmtSeasons->bindValue(":titulo",$titulo);*/


$stmt= $db->prepare("SELECT title FROM series WHERE id = $idSerie");
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <ul>
          <li>Titulo: <?= $result['title']?></li>
          <?php foreach ($seasons as $season):?>
            <li>Temporadas: <?= $season['title'] ?></li>
            <li>Episodios: <?= $episodes['title'] ?></li>
        <?php endforeach ?>
      </ul>
    </div>  
  </body>
</html>
