<?php

$inputDay = (int) readline ('Enter number of day: ');

if ($inputDay > 0 && $inputDay < 8) {
    if ($inputDay === 1) {
        echo 'Monday';
    } else if ($inputDay === 2) {
        echo 'Tuesday';
    } else if ($inputDay === 3) {
        echo 'Wednesday';
    } else if ($inputDay === 4) {
        echo 'Thursday';
    } else if ($inputDay === 5) {
        echo 'Friday';
    } else if ($inputDay === 6) {
        echo 'Saturday';
    } else if ($inputDay === 7) {
        echo 'Sunday';
    }
} else {
    echo 'Error, wrong day count!';
}



switch ($inputDay) {
    case 1;
    echo 'Monday';
    break;
    case 2;
    echo 'Tuesday';
    break;
    case 3;
    echo 'Wednesday';
    break;
    case 4;
    echo 'Thursday';
    break;
    case 5;
    echo 'Friday';
    break;
    case 6;
    echo 'Saturday';
    break;
    case 7;
    echo 'Sunday';
    break;
    default;
        echo 'Wrong day count';
        break;
}
