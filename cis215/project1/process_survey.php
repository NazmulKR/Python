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
if ($email == "") {
    $errors[] = "Email is required.";
}

$allowed_ages = [
    "18-22","23-27","28-32","33-37",
    "38-42","43-47","48-52","53-57",
    "58-62","63-67","68+"
];

$age_ok = false;
$i = 0;
while ($i < count($allowed_ages)) {
    if ($age == $allowed_ages[$i]) {
        $age_ok = true;
    }
    $i = $i + 1;
}

if ($age_ok == false) {
    $errors[] = "Please select a valid age range.";
}


$allowed_genders = ["m","f","nb","o"];

$gender_ok = false;
$i = 0;
while ($i < count($allowed_genders)) {
    if ($gender == $allowed_genders[$i]) {
        $gender_ok = true;
    }
    $i = $i + 1;
}

if ($gender_ok == false) {
    $errors[] = "Please select a valid gender.";
}

$major = trim($major);
if ($major == "") {
    $errors[] = "Major is required.";
}
$major = htmlspecialchars($major);

if (!is_numeric($hours)) {
    $errors[] = "Study hours must be a number.";
} else {
    $hours = (int)$hours;
    if ($hours < 0 || $hours > 168) {
        $errors[] = "Study hours must be between 0 and 168.";
    }
}

if (count($study_methods) == 0) {
    $errors[] = "Select at least one study method.";
}

$method_string = "";
$i = 0;
while ($i < count($study_methods)) {
    if ($method_string == "") {
        $method_string = $study_methods[$i];
    } else {
        $method_string = $method_string . "," . $study_methods[$i];
    }
    $i = $i + 1;
}

$comments = trim($comments);
$comments = htmlspecialchars($comments);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Result</title>
</head>
<body>

<main>

<?php
if (count($errors) > 0) {

    echo "<h1>Errors</h1>";
    echo "<ul>";

    $i = 0;
    while ($i < count($errors)) {
        echo "<li>" . htmlspecialchars($errors[$i]) . "</li>";
        $i = $i + 1;
    }

    echo "</ul>";
    echo '<div><a href="project1starter(7) (1).php">Return to Survey</a></div>';

} 
  else {

    $db = connectDB();

    $sql = "INSERT INTO survey_responses
            (email,age_range,gender,major,hours_per_week,study_methods,comments)
            VALUES (?,?,?,?,?,?,?)";

    $stmt = $db->prepare($sql);
     $stmt->execute([
        $email,
        $age,
        $gender,
        $major,
        $hours,
        $method_string,
        $comments
    ]);
       
        echo "<h1>Survey Submitted</h1>";

    echo "<ul>";
    echo "<li>Email: " . htmlspecialchars($email) . "</li>";
    echo "<li>Age: " . htmlspecialchars($age) . "</li>";
    echo "<li>Gender: " . htmlspecialchars($gender) . "</li>";
    echo "<li>Major: " . htmlspecialchars($major) . "</li>";
    echo "<li>Study Hours: " . htmlspecialchars($hours) . "</li>";
    echo "<li>Methods: " . htmlspecialchars($method_string) . "</li>";
    echo "<li>Comments: " . nl2br(htmlspecialchars($comments)) . "</li>";
    echo "</ul>";

    echo '<div><a href="project1starter(7) (1).php">Submit Again</a></div>';
    echo '<div><a href="data.php">View Data</a></div>';
}
?>

</main>

</body>
</html