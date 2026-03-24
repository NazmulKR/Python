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
    
</body>
</html>
