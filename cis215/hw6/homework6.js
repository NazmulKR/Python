
/*
Homework 6
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

function even_while(n) {
    let evens = [];
    let i = 1;

    while (i <= n) {
        if (i % 2 == 0) {
            evens.push(i);
        }
        i++;
    }

    return evens;
}
// While works, but for is cleaner here.


/* LOOP TASK 2
   Numbers 1 to 30 divisible by 2 or 3
 */

function divisible_for() {
    let output = "";

    for (let i = 1; i <= 30; i++) {
        if (i % 2 == 0 || i % 3 == 0) {
            output += i + " ";
        }
    }

    return output;
}
// For is better because range is fixed.

function divisible_while() {
    let i = 1;
    let output = "";

    while (i <= 30) {
        if (i % 2 == 0 || i % 3 == 0) {
            output += i + " ";
        }
        i++;
    }

    return output;
}
// While works but for is simpler.


/* ARRAYS SECTION
   New array function: join
 */

/*
join puts array values together into one string.
*/

function sum_example() {
    let numbers = [5, 10, 15, 20];
    return numbers.join(" ");
}

/* EXTRA FUNCTION
   Reverse a string 
 */

function reverse_string(text) {
    let result = "";

    for (let i = text.length - 1; i >= 0; i--) {
        result += text[i];
    }

    return result;
}

function fizzbuzz(n) {
    let output = "";

    for (let i = 1; i <= n; i++) {

        // Check multiples of 3 AND 5 first
        if (i % 3 == 0 && i % 5 == 0) {
            output += "FizzBuzz ";
        }

        // Multiple of 3
        else if (i % 3 == 0) {
            output += "Fizz ";
        }

        // Multiple of 5
        else if (i % 5 == 0) {
            output += "Buzz ";
        }

        // Otherwise just print the number
        else {
            output += i + " ";
        }
    }

    return output;
}


console.log("Loop Task 1: Even Numbers");
console.log("Using FOR loop:");
console.log(even_for(20));

console.log("Using WHILE loop:");
console.log(even_while(20));

console.log("Loop Task 2: Divisible by 2 or 3");
console.log("Using FOR loop:");
console.log(divisible_for());

console.log("Using WHILE loop:");
console.log(divisible_while());

console.log("Array Function Example");
console.log("Using join on [5, 10, 15, 20]:");
console.log(sum_example());

console.log("Reverse String Function");
console.log("Original: Hello");
console.log("Reversed: " + reverse_string("Hello"));

console.log("FizzBuzz Output (1 to 30)");
console.log(fizzbuzz(30));