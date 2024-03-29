<!-- Write a PHP program to check Armstrong Number -->

<?php

function isArmstrong($number)
{
    $originalNumber = $number;
    $sum = 0;
    $n = strlen($number);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $n);
        $number = (int) ($number / 10);
    }

    return $sum === $originalNumber;
}

$number = (int)readline("Enter a number: ");

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}

?>