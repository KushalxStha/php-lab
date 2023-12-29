<!-- Write a PHP program to print sum of digits -->

<?php
function sumOfDigits($number) {
    $sum = 0;

    // Convert the number to a string to iterate through each digit
    $numberStr = (string) $number;

    // Iterate through each digit and add it to the sum
    for ($i = 0; $i < strlen($numberStr); $i++) {
        $sum += (int) $numberStr[$i];
    }

    return $sum;
}

// Get user input or use a specific number
$userInput = (int)readline("Enter an Integer:");

// Calculate and print the sum of digits
$result = sumOfDigits($userInput);
echo "The sum of digits for $userInput is $result.";
?>