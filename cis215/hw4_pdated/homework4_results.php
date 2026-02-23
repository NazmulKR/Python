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
         function score_quiz(){
             $score = 0; 
             if($_POST["q1"] === "action"){ $score++; } 
             if($_POST["q2"] === "plan"){ $score++; } 
             if($_POST["q3"] === "magic"){ $score++; }

             $char = strtolower(trim($_POST["q4"]));
              if($char !== ""){ $score++; } 
              
              return $score;
         }
         function main(){ 
            check_required(["q1","q2","q3","q4"]);
         if(!isset($_POST["q1"]) || !isset($_POST["q2"]) || !isset($_POST["q3"]) || !isset($_POST["q4"])){ 
            return;
         }
         
         $score = score_quiz();
         echo "<h1>Your Score: $score / 4</h1>";
         if($score <= 1){ 
            echo "<p>You are a Casual Player — you play for fun and vibes.</p>";
         }
         elseif($score <= 3){ 
            echo "<p>You are a Skilled Adventurer — balanced and strategic.</p>";
         } else{ 
            echo "<p>You are a Hardcore Gamer — fearless, focused, unstoppable.</p>";
         }
       echo '<p><a href="homework4_quiz.php">Back to Quiz</a></p>'; 
         }
         main();
       ?>
    </main>
    
</body>
</html>