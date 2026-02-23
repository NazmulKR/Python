<?php
/*
Nazmul Kabir Rahive
nrahive@genesee.edu
This file recieves the data entered by the user by the form
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Results</title>
</head>
<body>
    <main>
        <?php
         function check_required($list) {
            foreach ($list as $items) {
                if (!isset($_POST[$items]) and $_POST[$items] ==="") {
                    echo"<h2>Error</h2>";
                    echo"<p>You must answer all questions.</p>";
                    echo "<p> <a href=\"homework4_quiz.php\">Go back</a><p>";
                    return;
                }
            }
         }

        ?>
    </main>
    
</body>
</html>