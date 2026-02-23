<?php
/* Nazmul Kabir Rahive
nrahive@genesee.edu
This file shows a Game themed form.
The user answers questions about games and answers sent to homework4_results.php file
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Game Personality Quiz</title>
</head>
<body>
    <main>
        <form action="homeowork4_results.php" method="POST">
          <fieldset>
            <legend>1. What is your favorite game genre?</legend>
            <div> <input type="radio" name="q1" id="q1-action" value="action"> <label for="q1-action">Action</label> </div>
             <div> <input type="radio" name="q1" id="q1-rpg" value="rpg"> <label for="q1-rpg">RPG</label> </div>
              <div> <input type="radio" name="q1" id="q1-strategy" value="strategy"> <label for="q1-strategy">Strategy</label> </div>
          </fieldset>
          <fieldset>
            <legend>2. How do you approach a boss fight?</legend>
            <div><input type="radio" name="q2" id="q2-rush" value="rush"> <label for="q2-rush">Rush in and attack</label></div>
            <div><input type="radio" name="q2" id="q2-plan" value="plan"> <label for="q2-plan">Study patterns and plan</label></div>
          </fieldset>
          <fieldset>
            <legend>
                3. Choose your favorite in-game item
            </legend>

            <div>
                <select name="q3" id="q3-select">
                    <option value="default">-- Select an item --</option>
                    <optgroup label="Common Items">
                        <option value="potion">Potion</option>
                        <option value="shield">Shield</option>
                        <option value="boots">Speed Boots</option>
                    </optgroup>
                    <optgroup label="Rare Items">
                        <option value="magic">Magic Stuff</option>
                        <option value="stealth"> Stealth Cloak</option>
                    </optgroup>
                </select>
            </div>
          </fieldset>
          <fieldset>
            <legend>4. Type your favorite video game character</legend>
            <div>
                <label for="q4-text">Character:</label> 
                <input type="text" name="q4" id="q4-text">
            </div>
          </fieldset>

          <div>
                 <button type="submit" name="submit-button" id="submit-id">Submit</button>
          </div>
        </form>
    </main>
</body>
</html>