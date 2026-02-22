<?php
/*
Homework 4 Car personality Quiz resutls
Nazmul Kabir Rahive
nrahive@genesee.edu

This file collects data from the form given by the user(s)
*/

$q1 = isset($_POST['q1']) ? $_POST['q1'] : "";
$q2 = isset($_POST['q2']) ? $_POST['q2'] : "";
$q3 = isset($_POST['q3']) ? $_POST['q3'] : "";
$q4 = isset($_POST['q4']) ? $_POST['q4'] : "";

$hasError = false;

if (empty($q1) || empty($q2) || empty($q3) || empty($q4)) {
    $hasError = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <h1>
        Car Quiz Results
    </h1>
<?php
if ($hasError == true) {

    echo "<p><strong>Error:</strong> You did not answer all questions.</p>";
    echo "<p>Please go back and finish the quiz.</p>";

} else {
    $score = 0;
    if ($q1 == "bmw") {
        $score = $score + 1;
    }
     if ($q2 == "coupe") {
        $score = $score + 1;
    }
          if ($q3 == "manual") {
        $score = $score + 1;
    }
    if ($q4 == "gas" || $q4 == "hybrid") {
        $score = $score + 1;
    }
echo "<p>You scored <strong>$score / 4</strong>.</p>";
if ($score <= 1) {
        echo "<p>You are car person but not a fun one.</p>";
    }
     else if ($score <= 3) {
        echo "<p>You like cars but you're not obsessed.</p>";
    }
    else {
        echo "<p>You are a true car enthusiast!</p>";
    }
}
?>

<p>
    <a href="car_quiz.php">
         <button type='button'>Back to Quiz</button>
    </a>

</p>

</body>
</html>