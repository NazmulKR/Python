
/*
Homework 3 - Practicing PHP
Author: Nazmul Kabir
Email: nrahive@genesee.edu

This file shows:
- Loop tasks using both for and while
- An array function example
- A custom function to reverse a string
- One of the FizzbuZZ
*/

/* LOOP TASK 1
   Even numbers from 1 to n
*/

function even_for(n) {
    let evens = [];

    for (let i = 1; i <= n; i++) {
        if (i % 2 == 0) {
            evens.push(i);
        }
    }

    return evens;
}
// For loop is better because we know start and end.

function even_while($n) {
    $evens = [];
    $i = 1;

    while ($i <= $n) {
        if ($i % 2 == 0) {
            $evens[] = $i;
        }
        $i++;
    }

    return $evens;
}
// While works, but for is cleaner here.


/* LOOP TASK 2
   Numbers 1 to 30 divisible by 2 or 3
 */

function divisible_for() {
    for ($i = 1; $i <= 30; $i++) {
        if ($i % 2 == 0 || $i % 3 == 0) {
            echo $i . " ";
        }
    }
}
// For is better because range is fixed.

function divisible_while() {
    $i = 1;

    while ($i <= 30) {
        if ($i % 2 == 0 || $i % 3 == 0) {
            echo $i . " ";
        }
        $i++;
    }
}
// While works but for is simpler.


/* ARRAYS SECTION
   New array function: array_sum
 */

/*
array_sum adds all numbers in an array.
*/

function sum_example() {
    $numbers = [5, 10, 15, 20];
    return array_sum($numbers);
}


/* EXTRA FUNCTION
   Reverse a string 
 */

function reverse_string($text) {
    $result = "";

    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $result .= $text[$i];
    }

    return $result;
}

function fizzbuzz($n) {

    for ($i = 1; $i <= $n; $i++) {

        // Check multiples of 3 AND 5 first
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        }

        // Multiple of 3
        elseif ($i % 3 == 0) {
            echo "Fizz ";
        }

        // Multiple of 5
        elseif ($i % 5 == 0) {
            echo "Buzz ";
        }

        // Otherwise just print the number
        else {
            echo $i . " ";
        }
    }
}




