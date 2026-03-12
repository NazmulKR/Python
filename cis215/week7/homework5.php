<?php
/*
Author: Nazmul Kabir Rahive
Email: nrahive@genesee.edu

This file demonstrates CRUD operations using SQL.
*/

include("dbconfig.php");
$db = connectDB();

// Creating Table named movies with columns named title rating runtime director and release_year.
$db->query("CREATE TABLE  movies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
    rating INT,
    runtime INT,
    director VARCHAR(100),
    release_year INT
)");
//Inserting datas of all of the columns
$db->query("INSERT INTO movies (title, rating, runtime, director, release_year)
VALUES ('The Matrix', 9, 136, 'Wachowski', 1999)");

$db->query("INSERT INTO movies (title, rating, runtime, director, release_year)
VALUES ('Avatar', 8, 162, 'James Cameron', 2009)");

$db->query("INSERT INTO movies (title, rating, runtime, director, release_year)
VALUES ('Titanic', 9, 195, 'James Cameron', 1997)");

$db->query("INSERT INTO movies (title, rating, runtime, director, release_year)
VALUES ('Inception', 9, 148, 'Christopher Nolan', 2010)");

$db->query("INSERT INTO movies (title, rating, runtime, director, release_year)
VALUES ('The Matrix', 9, 136, 'Wachowski', 1999)");

echo "<h2>All Movies</h2>";
//Making nesting array of titles including other datas and store in variable $movies 
$result = $db->query("SELECT * FROM movies");
$movies = $result->fetchAll();

foreach ($movies as $row) {
    echo $row["title"] . "<br>"; //Printing only the title of the movies
}

echo "<h2>Movies With Rating 9 or Higher</h2>";

$result = $db->query("SELECT * FROM movies WHERE rating >= 9"); //Making nesting array of titles including other datas and store in variable $movies
$movies = $result->fetchAll();

foreach ($movies as $row) {
    echo $row["title"] . "<br>"; //Printing only the title of the movies with rating 9 or higher
}

$db->query("UPDATE movies 
SET title = 'The Matrix (1999)' 
WHERE id = 5"); //Updating the title of the movie with id 5 to "The Matrix (1999)"

$db->query("DELETE FROM movies WHERE rating < 8");

echo "<h2>Movies Without Certain Words</h2>";

$result = $db->query("SELECT * FROM movies
WHERE title NOT LIKE '%the%'
AND title NOT LIKE '%and%'
AND title NOT LIKE '% a %'
AND title NOT LIKE '%an%'"); //Making nesting array of titles including other datas and store in variable $movies for movies without certain words in the title

$movies = $result->fetchAll();

foreach ($movies as $row) {
    echo $row["title"] . "<br>"; //Printing only the title of the movies without certain words in the title
}





?>