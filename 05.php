<?php

$keyPad = [
    [2, 'A', 'B', 'C'],
    [3, 'D', 'E', 'F'],
    [4, 'G', 'H', 'I'],
    [5, 'J', 'K', 'L'],
    [6, 'M', 'N', 'O'],
    [7, 'P', 'Q', 'R', 'S'],
    [8, 'T', 'U', 'V'],
    [9, 'W', 'X', 'Y', 'Z']
    ];


$string = strtoupper(readline('Enter word: '));


$stringArr = str_split($string);

for ($i = 0; $i < count($stringArr); $i++) {
    for ($j = 0; $j < count($keyPad); $j++) {
        if (!array_search($stringArr[$i], $keyPad[$j]) <= 0) {
            if (array_search($stringArr[$i], $keyPad[$j]) === 1) {
                echo $keyPad[$j][0];
            } else if (array_search($stringArr[$i], $keyPad[$j]) === 2) {
                echo $keyPad[$j][0], $keyPad[$j][0];
            } else if (array_search($stringArr[$i], $keyPad[$j]) === 3) {
                echo $keyPad[$j][0], $keyPad[$j][0], $keyPad[$j][0];
            } else if (array_search($stringArr[$i], $keyPad[$j]) === 4) {
                echo $keyPad[$j][0], $keyPad[$j][0], $keyPad[$j][0], $keyPad[$j][0];
            }
        }
    }
}




