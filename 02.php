<?php

//echo "Enter the number.";

//todo print if number is positive or negative

$inputNumber = (int) readline ('Enter number: ');

if ($inputNumber >= 0) {
    echo 'Positive Nr' . PHP_EOL;
} else {
    echo 'Negative Nr' . PHP_EOL;
}
