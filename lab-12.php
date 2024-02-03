<!-- Write a PHP program to reverse the string -->

<?php
function reverseString($str) {
    $length = strlen($str);
    $reversed = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    
    return $reversed;
}

// Input string
$inputString = readline("Enter a string: ");

// Calling function to reverse the string
$reversedString = reverseString($inputString);

echo "Original string: $inputString\n";
echo "Reversed string: $reversedString";
?>
