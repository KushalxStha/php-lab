<!-- Remove specific element by value from an array in PHP -->

<?php
// Original array
$myArray = array(1, 2, 3, 4, 5);

// Value to remove
$valueToRemove = 3;

// Use array_filter to remove the element by value
$filteredArray = array_filter($myArray, function ($element) use ($valueToRemove) {
    return $element !== $valueToRemove;
});

// Convert the filtered array back to indexed keys
$filteredArray = array_values($filteredArray);

// Display the filtered array
print_r($filteredArray);
?>
