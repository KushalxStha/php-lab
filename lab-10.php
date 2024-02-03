<!-- Find cube of given number using functions -->

<?php
function cube($number) {
    $result = $number * $number * $number;
    return $result;
}

$number = readline("Enter a number: ");
$cubeResult = cube($number);

echo "The cube of $number is: $cubeResult";
?>