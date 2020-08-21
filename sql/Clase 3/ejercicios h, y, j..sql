SELECT name,count(title) as cant_peliculas from genres LEFT JOIN movies ON genre_id = genres.id where rating > 5 GROUP BY name;
SELECT series.title AS titulo, COUNT(episodes.id) AS cant_episodes  FROM series LEFT JOIN seasons ON serie_id = series.id LEFT JOIN episodes ON season_id = seasons.id GROUP BY titulo   
