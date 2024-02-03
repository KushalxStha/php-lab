<!-- Write a PHP program to check Palindrome number -->

<?php

function isPalindrome($number)
{
    $originalNumber = $number;
    $reverse = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int) ($number / 10);
    }

    return $reverse === $originalNumber;
}

$number = (int)readline("Enter a number: ");

if (isPalindrome($number)) {
    echo "$number is a palindrome number.";
} else {
    echo "$number is not a palindrome number.";
}

?>