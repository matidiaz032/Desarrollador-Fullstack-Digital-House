<?php
include_once 'conexion.php';
$idSerie=$_GET['id'];
$db=conectarse();
$query=$db->prepare("SELECT series.title AS serie, seasons.title AS temporada, seasons.id AS temporada_id FROM series LEFT JOIN seasons ON series.id=serie_id WHERE series.id=:id  ORDER BY seasons.id;"); //Me traigo las tempooradas
$query2=$db->prepare("SELECT seasons.id AS temporada_id, episodes.title AS episodios FROM series LEFT JOIN seasons ON series.id=serie_id INNER JOIN episodes ON season_id=seasons.id WHERE series.id=:id  ORDER BY seasons.id;"); // Me traigo los episodios
// A partir de acá combino los dos resultados, y uno las temporadas con igual "id" en la misma posición
$query->bindValue(':id', $idSerie, PDO::PARAM_INT);
$query2->bindValue(':id', $idSerie, PDO::PARAM_INT);

$query->execute();
$query2->execute();

$temporadas = $query->fetchAll(PDO::FETCH_ASSOC);
$episodios = $query2->fetchAll(PDO::FETCH_ASSOC);
$data = [];

foreach ($temporadas as  $key => $temporada) {
  $data[]['temporada'] = $temporada['temporada'];
  foreach ($episodios as $pos=> $episodio) {
    if ($episodio['temporada_id'] == $temporada['temporada_id']){
      $data[$key]['episodios'][] = $episodio['episodios'];
      unset($episodios[$pos]);
    }
  }

}

 ?>
 <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body style="background-image: url(fondo.gif);">

      <h1 style="margin-left: 50px; color: aliceblue; font-size:25px;"> Info de las series: </h1>
        <h2 style="text-align: center; padding-bottom:20px; padding-top:25px; color:red; font-size: 38px; font-weight: bold;"><?= $temporadas[0]['serie'];?></h2>
        <?php foreach ($data as $result): ?>

          <details style="margin-left:80px;">

            <summary style="font-weight: bold; font-size: 24px;"><?= $result['temporada'];?> </summary>
              <?php foreach ($result['episodios'] as $key => $episodio): ?>
                  <div style="font-size: 21px; color:whitesmoke; padding: 10 0 0 40;"> Episodio :<?=$episodio?> </div>
              <?php endforeach; ?>








          </details>

            <br>


        <?php endforeach;?>
      </div>
 <a href="series.php" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right;">←Seleccionar serie</a>
    </body>
  </html>
