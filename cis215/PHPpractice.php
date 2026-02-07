<?php

use LDAP\Result;
$a = 2;
$b = 2;

// Joining numbers as a string (Concatenation)
$c = $a . " " . $b; 
echo $c; // Outputs: 2 2
echo "<br>";

// Adding numbers together (Math)
echo $a + $b; // Outputs: 4
echo "<br>";

// Adding to the variable itself
echo $a += 2; // Outputs: 4 (because 2 + 2 = 4)
echo "<br>";
echo "10"+ $b;// Type Juggling
 echo "<br>";
 echo true + $c;
 if ($a != $c) {
    echo "This stat3ement is True";
 } //Condioinal
 if ($b != $c and $a == $b) {
    echo "This statement is true";
 } else  {
    echo "This is not true"; // If else if conditional
 }
 $color ="blue";
 $result = match ($color) {
    "yellow" => "Hey",
    "red"=> "GO",
    "blue"=> "True", //Match Condition
?>