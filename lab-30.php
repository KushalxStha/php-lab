<!-- Write a program to parse a JSON file and display its contents. -->

<?php

$jsonFilePath = 'sample.json';

// Reading the JSON file
$jsonData = file_get_contents($jsonFilePath);

// Checking if the JSON data was successfully read
if ($jsonData !== false) {
    // Decoding the JSON data into an associative array
    $dataArray = json_decode($jsonData, true);

    // Checking if JSON decoding was successful
    if ($dataArray !== null) {
        
        // Displaying the contents of the JSON data
        echo '<pre>';
        print_r($dataArray);
        echo '</pre>';
    } else {
        echo 'Error decoding JSON.';
    }

} else {
    echo 'Error reading the file.';
}

?>