<?php

/*
 * echo "Input the 1st number: ";

echo "Input the 2nd number: ";

echo "Input the 3rd number: ";
 */

//todo print the largest number

$howMuchNumbers = (int) readline ('Enter how much numbers: ');

$numbers = [];
for ($i = 0; $i < $howMuchNumbers; $i++) {
    $number = (int) readline ('Enter number: ');
    $numbers[] = $number;
}

var_dump($numbers);