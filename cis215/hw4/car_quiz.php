<?php
/* Homework 4 - Car Personality Quiz 
Nazmul Kabir Rahive 
email : nrahive@genesee.edu

This file shows a simple car themed form.
The user answers questions about cars amd answers sent to car_results.php file
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Personality Quiz</title>
</head>
<body>
    <h1>Car Personality Quiz</h1>
    <p>Answer the questions below and let us know what type of car person you are</p>
     <form action="Car_results.php" method="POST">
        <h3>1. Which car brand do you like most?</h3>
        <label>
            <input type="radio" name="q1" value="toyota">
            Toyota
        </label><br>
        <label>
            <input type="radio" name="q1" value="honda">
            Honda
        </label><br>
        <label>
            <input type="radio" name="q1" value="bmw">
            BMW
        </label><br>

        <h3>
            2. What is your favorite car body style?
        </h3>
        <select name="q2">
        <option value="">-- Select a body style --</option>
        <option value="sedan">Sedan</option>
        <option value="suv">SUV</option>
        <option value="coupe">Coupe</option>
    </select>
    <h3>3. What kind of transmission do you prefer?</h3>
      <label>
        <input type="radio" name="q3" value="auto">
        Automatic
    </label><br>
    <label>
        <input type="radio" name="q3" value="manual">
        Manual
    </label><br>
     </form>

</body>
</html>
