<?php

include "dbconfig.php";
$db = connectDB();

$total_hours = 0;
$total_people = 0;

$age_18_22 = 0;
$age_23_27 = 0;
$age_28_32 = 0;
$age_33_37 = 0;
$age_38_42 = 0;
$age_43_47 = 0;
$age_48_52 = 0;
$age_53_57 = 0;
$age_58_62 = 0;
$age_63_67 = 0;
$age_68_plus = 0;

$gender_m = 0;
$gender_f = 0;
$gender_nb = 0;
$gender_o = 0;

$method_reading = 0;
$method_videos = 0;
$method_group = 0;
$method_practice = 0;
$method_tutoring = 0;

$comment1 = "";
$comment2 = "";
$comment3 = "";
$comment_count = 0;

$sql = "SELECT * FROM survey_responses";
$stmt = $db->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $total_people = $total_people + 1;

    $total_hours = $total_hours + $row["hours_per_week"];

      if ($row["age_range"] == "18-22") { $age_18_22 = $age_18_22 + 1; }
    if ($row["age_range"] == "23-27") { $age_23_27 = $age_23_27 + 1; }
    if ($row["age_range"] == "28-32") { $age_28_32 = $age_28_32 + 1; }
    if ($row["age_range"] == "33-37") { $age_33_37 = $age_33_37 + 1; }
    if ($row["age_range"] == "38-42") { $age_38_42 = $age_38_42 + 1; }
    if ($row["age_range"] == "43-47") { $age_43_47 = $age_43_47 + 1; }
    if ($row["age_range"] == "48-52") { $age_48_52 = $age_48_52 + 1; }
    if ($row["age_range"] == "53-57") { $age_53_57 = $age_53_57 + 1; }
    if ($row["age_range"] == "58-62") { $age_58_62 = $age_58_62 + 1; }
    if ($row["age_range"] == "63-67") { $age_63_67 = $age_63_67 + 1; }
    if ($row["age_range"] == "68+")   { $age_68_plus = $age_68_plus + 1; }

    if ($row["gender"] == "m")  { $gender_m  = $gender_m + 1; }
    if ($row["gender"] == "f")  { $gender_f  = $gender_f + 1; }
    if ($row["gender"] == "nb") { $gender_nb = $gender_nb + 1; }
    if ($row["gender"] == "o")  { $gender_o  = $gender_o + 1; }

    $methods = $row["study_methods"];

    if (strpos($methods, "reading") !== false)  { $method_reading  = $method_reading + 1; }
    if (strpos($methods, "videos") !== false)   { $method_videos   = $method_videos + 1; }
    if (strpos($methods, "group") !== false)    { $method_group    = $method_group + 1; }
    if (strpos($methods, "practice") !== false) { $method_practice = $method_practice + 1; }
    if (strpos($methods, "tutoring") !== false) { $method_tutoring = $method_tutoring + 1; }

    if ($row["comments"] != "" && $comment_count < 3) {

        if ($comment_count == 0) { $comment1 = $row["comments"]; }
        if ($comment_count == 1) { $comment2 = $row["comments"]; }
        if ($comment_count == 2) { $comment3 = $row["comments"]; }

        $comment_count = $comment_count + 1;
    }
}

$average_hours = 0;
if ($total_people > 0) {
    $average_hours = $total_hours / $total_people;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Data</title>
</head>
<body>

<header>
    <h1>Survey Data Summary</h1>
</header>

<nav>
    <ul>
        <li><a href="project1starter(7) (1).php">Survey Form</a></li>
        <li><a href="data.php">Data Summary</a></li>
    </ul>
</nav>

<main>

    <div>
        <h2>Average Study Hours</h2>
        <div><?php echo $average_hours; ?></div>
    </div>

    <div>
        <h2>Age Counts</h2>
        <ul>
            <li>18-22: <?php echo $age_18_22; ?></li>
            <li>23-27: <?php echo $age_23_27; ?></li>
            <li>28-32: <?php echo $age_28_32; ?></li>
            <li>33-37: <?php echo $age_33_37; ?></li>
            <li>38-42: <?php echo $age_38_42; ?></li>
            <li>43-47: <?php echo $age_43_47; ?></li>
            <li>48-52: <?php echo $age_48_52; ?></li>
            <li>53-57: <?php echo $age_53_57; ?></li>
            <li>58-62: <?php echo $age_58_62; ?></li>
            <li>63-67: <?php echo $age_63_67; ?></li>
            <li>68+: <?php echo $age_68_plus; ?></li>
        </ul>
    </div>

    <div>
        <h2>Gender Counts</h2>
        <ul>
            <li>m: <?php echo $gender_m; ?></li>
            <li>f: <?php echo $gender_f; ?></li>
            <li>nb: <?php echo $gender_nb; ?></li>
            <li>o: <?php echo $gender_o; ?></li>
        </ul>
    </div>

    <div>
        <h2>Study Method Counts</h2>
        <ul>
            <li>reading: <?php echo $method_reading; ?></li>
            <li>videos: <?php echo $method_videos; ?></li>
            <li>group: <?php echo $method_group; ?></li>
            <li>practice: <?php echo $method_practice; ?></li>
            <li>tutoring: <?php echo $method_tutoring; ?></li>
        </ul>
    </div>

    <div>
        <h2>Sample Comments (up to 3)</h2>
        <ul>
            <?php if ($comment1 != "") { echo "<li>" . htmlspecialchars($comment1) . "</li>"; } ?>
            <?php if ($comment2 != "") { echo "<li>" . htmlspecialchars($comment2) . "</li>"; } ?>
            <?php if ($comment3 != "") { echo "<li>" . htmlspecialchars($comment3) . "</li>"; } ?>
            <?php if ($comment1 == "" && $comment2 == "" && $comment3 == "") { echo "<li>No comments yet.</li>"; } ?>
        </ul>
    </div>

</main>

</body>
</html>