<!-- Write a php program to read a file which contains numbers 1 to 10.
Extract odd numbers in odd.txt and even numbers in even.txt file. -->

<?php

// Create an array with numbers from 1 to 10
$numbers = range(1, 10);

// Opening files for writing
$oddFile = fopen('z-odd.txt', 'w');
$evenFile = fopen('z-even.txt', 'w');

if ($oddFile && $evenFile) {
    // Loop through the numbers
    foreach ($numbers as $number) {
        // Determine if the number is odd or even
        if ($number % 2 === 0) {
            // Write even number to even.txt
            fwrite($evenFile, $number . PHP_EOL);
        } else {
            // Write odd number to odd.txt
            fwrite($oddFile, $number . PHP_EOL);
        }
    }

    // Close the files
    fclose($oddFile);
    fclose($evenFile);

    echo "Numbers written to odd.txt and even.txt successfully.";
} else {
    echo "Error opening files for writing.";
}

?>