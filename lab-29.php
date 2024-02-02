<!-- Write a program to parse a CSV file and display its contents. -->

<?php

$csvFilePath = 'sample.csv';

// Opening the CSV file for reading
$fileHandle = fopen($csvFilePath, 'r');

// Check if the file was opened successfully
if ($fileHandle !== false) {
    
    echo "<table border='1'>";

    // Read each row from the CSV file
    while (($data = fgetcsv($fileHandle)) !== false) {
        // Display each row as a table row
        echo '<tr>';
        foreach ($data as $value) {
            echo '<td>' . htmlspecialchars($value) . '</td>';
        }
        echo '</tr>';
    }

    fclose($fileHandle);

    echo '</table>';
} else {
    echo 'Error opening the file.';
}

?>