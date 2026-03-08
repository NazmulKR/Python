<?php
/*
Author: Nazmul Kabir Rahive
Email: nrahive@genesee.edu

This file demonstrates CRUD operations using SQL.
*/

include("dbconfig.php");
$db = connectDB();


$sql_create = "CREATE TABLE movies (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100),
rating INT,
runtime INT,
director VARCHAR(100),
release_year INT
)";

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





?>