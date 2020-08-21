-- SELECT title AS nombre;
-- SELECT movies AS peli;
-- SELECT concat(title,'(',year(release_date),')') AS Titulo_de_la_pelicula FROM movies ORDER BY Titulo_de_la_pelicula DESC;
-- SELECT concat(id,'(',year(release_date),')') AS id_genero FROM movies ORDER BY id_genero DESC;
-- SELECT concat(name,'(',year(release_date),')') AS nombre_genero FROM genres ORDER BY nombre_genero DESC;
-- SET sql_mode=PIPES_AS_CONCAT;
-- SELECT "Actor:" || first_name || " " || last_name AS actor FROM actors;
-- SELECT * FROM movies;
-- SELECT t1.*,t2.name FROM movies AS t1, genres AS t2 WHERE t1.genre_id=t2.id;
-- SELECT title AS titulo, first_name AS nombre FROM movies,actors,actor_movie WHERE movies.id=movie_id AND actors.id=actor_id ORDER BY title ASC,first_name ASC;
-- SELECT t1.*,t2.name FROM movies AS t1 INNER JOIN genres AS t2 ON t1.genre_id=t2.id;
-- SELECT t1.*,t2.name FROM movies AS t1 LEFT JOIN genres AS t2 ON t1.genre_id=t2.id;
-- SELECT t1.*,t2.name FROM movies AS t1 RIGHT JOIN genres AS t2 ON t1.genre_id=t2.id;
-- SELECT title AS titulo, first_name AS nombre FROM movies,actors,actor_movie WHERE movies.id=movie_id AND actors.id=actor_id ORDER BY title ASC,first_name ASC; 
-- SELECT title, first_name FROM movies LEFT JOIN actor_movie ON movies.id=movie_id INNER JOIN actors ON actors.id=actor_id ORDER BY title ASC,first_name ASC;
-- SELECT first_name,last_name,title FROM actors LEFT JOIN actors ON actors.id=actor_id INNER JOIN actor_movie ON movies.id=movie_id;
SELECT COUNT(*) AS total FROM movies WHERE genre_id=3;
SELECT AVG(rating) FROM movies;
SELECT SUM(length) FROM movies;
SELECT MIN(rating) FROM movies;
SELECT MAX(rating) FROM movies;
SELECT EXTRACT(QUARTER FROM '2014-10-13');
SELECT id, REPLACE(title,'Harry','Pedro')AS titulo_manipulado FROM movies ORDER BY id; 
SELECT REPLACE('abc abc', 'a', 'b');
SELECT
id,
title,
rating,
CASE
WHEN rating<4 THEN 'Mala'
WHEN rating<6 THEN 'Regular'
WHEN rating<8 THEN 'Buena'
WHEN rating<9.5 THEN 'Muy buena'
ELSE 'Exelente'
END AS rating_cat FROM movies ORDER BY rating;
SELECT DISTINCT actors.first_name, actors.last_name FROM actors INNER JOIN actor_movie ON actors.id=actor_movie.actor_id INNER JOIN movies ON movies.id=actor_movie.movie_id WHERE movies.title LIKE '%Harry Potter%';
SELECT name, COUNT(title) FROM genres LEFT JOIN movies ON genre_id=genres.id GROUP BY name;
-- SELECT name MIN (rating) AS 
SELECT series.title AS titulo, COUNT(number) AS cant_episode FROM series LEFT JOIN series ON series.id=serie_id GROUP BY titulo;
SELECT seasons.title AS temporada, series.title AS serie, MAX(episodes.number) AS cant_episode 
FROM seasons LEFT JOIN series ON series.id=serie_id LEFT JOIN episodes ON season_id=seasons.id 
GROUP BY temporada;
SELECT episodes.id AS episodio_id, seasons.number AS numero_temp, series.title AS nombre_serie, genres.name AS nombre_genero, 
COUNT(actors.id) AS cant_actores
FROM episodes 
LEFT JOIN seasons ON season_id=seasons.id 
LEFT JOIN series ON serie_id=series.id 
LEFT JOIN genres ON genre_id=genres.id
LEFT JOIN actor_episode ON episode_id=episodes.id
LEFT JOIN actors ON actor_id=actors.id
GROUP BY episode_id, numero_temp, nombre_serie, nombre_genero;
SELECT name, count(title) AS cant_peliculas FROM genres LEFT JOIN movies ON genre_id=genres.id WHERE rating>5 GROUP BY name;
















