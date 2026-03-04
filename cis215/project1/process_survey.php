<?php

include "dbconfig.php";

$survey_password = $_POST["survey_password"];
$email = $_POST["email"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$major = $_POST["major"];
$hours           = $_POST["hours_per_week"];
$comments        = $_POST["comments"];

if (empty($_POST["study_methods"])) {
    $study_methods = [];
} else {
    $study_methods = $_POST["study_methods"];
}

$HASH = '$2y$10$86U6eOu77G6diGRvy42YhuwJyVohlGz6MvB5mamDLgJQSQXmdr3ce';

$errors = [];

if (!password_verify($survey_password, $HASH)) {
    $errors[] = "Incorrect survey password.";
}

$email = trim($email);
if ($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email.";
}

$allowed_ages = [
    "18-22","23-27","28-32","33-37",
    "38-42","43-47","48-52","53-57",
    "58-62","63-67","68+"
];
$age_ok = false;
foreach ($allowed_ages as $a) {
    if ($age == $a) {
        $age_ok = true;
    }
}
if ($age_ok == false) {
    $errors[] = "Please select a valid age.";
}


?>