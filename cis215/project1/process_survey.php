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






?>