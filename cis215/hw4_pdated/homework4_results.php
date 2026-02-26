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
        $q1= $_POST["q1"];
        $q2= $_POST["q2"];
        $q3= $_POST["q3"];
        $q4= $_POST["q4"];
        
if ($q1 ==="" or $q1 ==="" or $q3 ==="default" or $q4 ==="") {
   echo"<h2>Error</h2>";
   echo"<p> Please answer all of the question to get the results of the quiz";
   echo "<a href=\"homework4_quiz.php\"> Back to Quiz</a></p>";
} else {
   $score =0;
   if ($q1 === "action") {
      $score = $score + 1;
   }
   if ($q2 === "plan") {
      $score = $score + 1;
   }
   if ($q3 === "magic") {
      $score = $score + 1;
   }
   if ($q4 !== "") {
      $score = $score + 1;
   }
   echo "<h1>Your Score: $score / 4</h1>";
   if ($score <=1) {
      echo "<p>You are a casual gamer. You play for fun</p>";
   } else if ($score <=3){
      echo "<p>You are a skilled adventurer</p>";
   } else {
      echo "You are a harcore gamer";
   }
   echo '<p><a href="homework4_quiz.php">Back to Quiz</a></p>';
}
   
       ?>
    </main>
    
</body>
</html>