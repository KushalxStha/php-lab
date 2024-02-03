<!-- Write a PHP program to count the words in the string -->

<?php
function countWords($str) {
    // Use the str_word_count function to count words in the string
    $wordCount = str_word_count($str);
    return $wordCount;
}

// Input string
$inputString = readline("Enter a sentence: ");

// Calling function to count words in the string
$wordCount = countWords($inputString);

echo "Input string: $inputString\n";
echo "Word count: $wordCount";
?>
