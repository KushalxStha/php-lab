<!-- Write a php program to reverse a given number. -->

<?php

function reverseNumber($number)
{
    $reverse = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int) ($number / 10);
    }

    return $reverse;
}

$number = readline("Enter a number: "); 
$reversedNumber = reverseNumber($number);

echo "Original Number: $number\n";
echo "Reversed Number: $reversedNumber";

?>