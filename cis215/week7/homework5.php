<?php
/*
Author: Nazmul Kabir Rahive
Email: nrahive@genesee.edu

This file demonstrates CRUD operations using SQL.
*/

include("dbconfig.php");
$db = connectDB();

echo "<h1>Movie Database</h1>";

$sql_create = "CREATE TABLE movies (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100),
rating INT,
runtime INT,
director VARCHAR(100),
release_year INT
)";

$db->query($sql_create);




?>