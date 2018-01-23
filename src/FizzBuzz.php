<?php

/**
 * Écrire un programme qui renvoi:
 *
 * 1 - "fizz" dans le cas ou le nombre saisi en paramètre de la fonction est un multiple de 3
 * 2 - "buzz" dans le cas ou le nombre saisi en paramètre de la fonction est un multiple de 5
 * 3 - "fizzbuzz" dans le cas ou le nombre saisi est à la fois un multiple de 3 et de 5
 * 4 - Le nombre dans le cas ou ce dernier est ni un multiple de 3, ni un multiple de 5
 *
 */


    function fizzBuzz(int $number)
    {

        if ($number % 3 == 0 && $number % 5 == 0) {
            return "fizzBuzz";
        }
        if ($number % 3 == 0) {
            return "fizz";
        }
        if ($number % 7 == 0) {
            return "plop";
        }
        if ($number % 5 == 0) {
           return  "buzz";
        }
        return $number;
    }

echo "bienvenue";
echo "\n";
