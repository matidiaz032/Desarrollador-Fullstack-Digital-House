SELECT id, title,release_date FROM movies WHERE release_date > '2001-01-01' ORDER BY title DESC LIMIT 5;
SELECT movies.title, movies.release_date, genres.name FROM movies INNER JOIN genres ON genres.id = movies.genre_id WHERE movies.release_date > '2000-01-01';
SELECT actors.first_name, actors.last_name FROM actors INNER JOIN actor_movie ON actors.id = actor_movie.actor_id INNER JOIN movies ON movies.id = actor_movie.movie_id WHERE movies.title LIKE '%Harry Potter%';
SELECT movies.id, movies.title, movies.release_date, genres.name, actor_movie.actor_id, actors.first_name, actors.last_name FROM movies INNER JOIN genres ON genres.id = movies.genre_id LEFT JOIN actor_movie ON movies.id = actor_movie.movie_id LEFT JOIN actors ON actors.id = actor_movie.actor_id WHERE movies.id > 15;
