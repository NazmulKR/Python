<?php
include "dbconfig.php";

$db = connectDB();
$avg_sql = "SELECT AVG(hours_per_week) as average_hours FROM survey_responses";
$avg_row = $db->query($avg_sql)->fetch();

$total_sql = "SELECT COUNT(*) AS total_responses FROM survey_responses";
$total_result = $db->query($total_sql);
$total_row = $total_result->fetch();

$age_sql = "SELECT age_range, COUNT(*) AS total
FROM survey_responses
GROUP BY age_range
ORDER BY age_range";
$age_result = $db->query($age_sql);

$gender_sql = "SELECT gender, COUNT(*) AS total
FROM survey_responses
GROUP BY gender
ORDER BY gender";
$gender_result = $db->query($gender_sql);

$major_sql = "SELECT major, COUNT(*) AS total
FROM survey_responses
GROUP BY major
ORDER BY major";
$major_result = $db->query($major_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Data</title>
</head>
<body>
    <main>
         <h1>Survey Data</h1>
         <a href="survey.php">Return to Survey</a>
          <h2>Overall Summary</h2>
        <p>Total Responses: 
            <?php echo $total_row["total_responses"]; ?></p>
        <p>Average Study Hours Per Week: 
            <?php echo round($avg_row["average_hours"], 2); ?></p>

        <h2>Responses by Age Range</h2>
        <?php
        $row = $age_result->fetch();
        if ($row) {
            echo "<p>" . $row["age_range"] . ": " . $row["total"] . "</p>";
        }
        ?>

        <h2>Responses by Gender</h2>
        <?php
        $row = $gender_result->fetch();
        if ($row) {
            echo "<p>" . $row["gender"] . ": " . $row["total"] . "</p>";
        }
        ?>

        <h2>Responses by Major</h2>
        <?php
        $row = $major_result->fetch();
        if ($row) {
            echo "<p>" . $row["major"] . ": " . $row["total"] . "</p>";
        }
        ?>
    </main>
</body>
</html>
