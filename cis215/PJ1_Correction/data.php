<?php
include "dbconfig.php";

$db = connectDB();
$sql = "SELECT * FROM survey_responses";
$stmt = $db->query($sql);

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
         <?php
           $row = $stmt->fetch() ;
              while ($row) {
                echo "<ul>";
            echo "<li>Email: " .($row["email"]) . "</li>";
            echo "<li>Age: " .($row["age_range"]) . "</li>";
            echo "<li>Gender: " .($row["gender"]) . "</li>";
            echo "<li>Major: " .($row["major"]) . "</li>";
            echo "<li>Hours: " .($row["hours_per_week"]) . "</li>";
            echo "<li>Methods: " .($row["study_methods"]) . "</li>";
            echo "<li>Comments: " .($row["comments"]) . "</li>";
            echo "</ul>";
            
        }
                
         ?>

    </main>
</body>
</html>
