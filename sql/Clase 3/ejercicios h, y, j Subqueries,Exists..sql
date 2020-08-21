SELECT name,count(title) as cant_peliculas from genres LEFT JOIN movies ON genre_id = genres.id where rating > 5 GROUP BY name;
SELECT series.title AS titulo, COUNT(episodes.id) AS cant_episodes  FROM series LEFT JOIN seasons ON serie_id = series.id LEFT JOIN episodes ON season_id = seasons.id GROUP BY titulo;
SELECT series.title AS titulo, COUNT(episodes.id) AS cant_episodes  FROM series LEFT JOIN seasons ON serie_id = series.id LEFT JOIN episodes ON season_id = seasons.id GROUP BY titulo; 
SELECT a.id, a.first_name, a.last_name,(SELECT COUNT(*) FROM actor_movie AS am WHERE am.actor_id = a.id) AS tot_peliculas,(SELECT COUNT(*) FROM actor_episode AS ae WHERE ae.actor_id = a.id) AS tot_episodios FROM actors AS a;
SELECT first_name, last_name FROM actors JOIN actor_movie ON actor_id = actors.id LEFT JOIN movies ON movie_id = movies.id WHERE favorite_movie_id IN(SELECT id FROM movies WHERE title LIKE "%T%");
SELECT name FROM genres WHERE id IN (SELECT DISTINCT genre_id FROM series WHERE YEAR(release_date) <= '2013');
SELECT title FROM movies WHERE NOT EXISTS(SELECT favorite_movie_id FROM actors WHERE movies.id = favorite_movie_id);
SELECT name FROM genres WHERE EXISTS(SELECT genre_id FROM movies WHERE genres.id = genre_id) AND EXISTS(SELECT genre_id FROM series WHERE genres.id = genre_id);
SELECT name FROM genres WHERE NOT EXISTS(SELECT genre_id FROM series WHERE genres.id=genre_id);-