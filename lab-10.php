<!-- Find cube of given number using functions -->

<?php
function cube($number) {
    $result = $number * $number * $number;
    return $result;
}

// Usage example
$number = 5; 
$cubeResult = cube($number);

echo "The cube of $number is: $cubeResult";
?>