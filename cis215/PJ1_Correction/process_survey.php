<?php
include "dbconfig.php";

$survey_password = $_POST["survey_password"];
$email = trim($_POST["email"]);
$age = $_POST["age"];
$gender = $_POST["gender"];
$major = trim($_POST["major"]);
$hours = $_POST["hours_per_week"];
$comments = trim($_POST["comments"]);

if (empty($_POST["study_methods"])) {
    $study_methods = [];
} else {
    $study_methods = $_POST["study_methods"];
}
$hash_string = '$2y$10$86U6eOu77G6diGRvy42YhuwJyVohlGz6MvB5mamDLgJQSQXmdr3ce';
$errors = [];

if (!password_verify($survey_password, $hash_string)) {
    $errors[] = "Incorrect survey password.";
}

if ($email == "") {
    $errors[] = "Email is required.";
}

?>