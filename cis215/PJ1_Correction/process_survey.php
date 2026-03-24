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

if ($age == "") {
    $errors[] = "Please select an age range.";
}

if ($gender == "") {
    $errors[] = "Please select a gender.";
}

if ($major == "") {
    $errors[] = "Major / Program is required.";
}

if ($hours == "") {
    $errors[] = "Study Hours Per Week is required.";
}

if (count($study_methods) == 0) {
    $errors[] = "Select at least one study method.";
}

$major = htmlspecialchars($major);
$comments = htmlspecialchars($comments);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Results</title>
</head>
<body>
<main>
    <h2>Survey Results</h2>
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
    echo "<a href='survey.php'>Return to Survey</a>";
    exit;
}

$db = connectDB();

$sql = "INSERT INTO survey_responses
(email, age_range, gender, major, hours_per_week, study_methods, comments)
VALUES (
    '$email',
    '$age',
    '$gender',
    '$major',
    '$hours',
    '$method_string',
    '$comments'
)";

$db->query($sql);

echo "<h1>Survey Submitted</h1>";
echo "<a href='survey.php'>Submit Again</a><br>";
echo "<a href='data.php'>View Data</a>";   
?>
</main>
</body>
</html>