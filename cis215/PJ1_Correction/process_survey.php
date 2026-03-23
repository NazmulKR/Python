<?php
include "dbconfig.php";

$survey_password = $_POST["survey_password"];
$email = trim($_POST["email"]);
$age = $_POST["age"];
$gender = $_POST["gender"];
$major = trim($_POST["major"]);
$hours = $_POST["hours_per_week"];
$comments = trim($_POST["comments"]);

?>