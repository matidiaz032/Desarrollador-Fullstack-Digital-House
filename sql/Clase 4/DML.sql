INSERT INTO movies (title, rating, awards, release_date, length) VALUES ('Avatar 2',2.9,2,'2003-10-01', 120), ('El Padrino',4.8,17,'1972-09-20',180), ( 'El Padrino. Parte II',4.5,12,'1975-10-13',200),('La Lista de Schindler',4.5,34,'1994-02-24',195),('Sueños de Fuga',4.5,2,'1995-02-24',140);
INSERT INTO movies (title, rating, release_date, length) VALUES ('Avatar 2',2.9,'2003-10-01', 120), ('El Padrino',4.8,'1972-09-20',180), ( 'El Padrino. Parte II',4.5,'1975-10-13',200),('La Lista de Schindler',4.5,'1994-02-24',195),('Sueños de Fuga',4.5,'1995-02-24',140);
SELECT title,awards FROM  movies;
SELECT * FROM actors;
INSERT INTO actors (first_name,last_name,rating,favorite_movie_id) VALUES('Jensen','Ackles',7.5,2),('Zhang','Ziyi',8.6,3),('Taylor','Lautner',7.3,8),('Mario','Casas',7.9,4),('Will','Smith',9.7,9);
INSERT INTO actors (first_name,last_name,favorite_movie_id) VALUES('Jensen','Ackles',2),('Zhang','Ziyi',3),('Taylor','Lautner',8),('Mario','Casas',4),('Will','Smith',9);
INSERT INTO actors (first_name,rating,favorite_movie_id) VALUES('Jensen',7.5,2),('Zhang',8.6,3),('Taylor',7.3,8),('Mario',7.9,4),('Will',9.7,9);
SELECT * FROM movies;
INSERT INTO actor_movie (actor_id,movie_id) VALUES (60,32);
