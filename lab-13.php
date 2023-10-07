<!-- Write a PHP program to count the words in the string -->

<?php
function countWords($str) {
    // Use the str_word_count function to count words in the string
    $wordCount = str_word_count($str);
    return $wordCount;
}

// Input string
$inputString = "This is a sample sentence. It contains several words.";

// Calling function to count words in the string
$wordCount = countWords($inputString);

echo "Input string: $inputString<br>";
echo "Word count: $wordCount";
?>
