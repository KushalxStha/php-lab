<!-- Write an example to demonstrate handling multiple exceptions. -->

<?php
class CustomException1 extends Exception {}
class CustomException2 extends Exception {}

function divideNumbers($numerator, $denominator) {
    try {
        if ($denominator == 0) {
            throw new CustomException1("Division by zero is not allowed.");
        } elseif ($denominator < 0) {
            throw new CustomException2("Denominator should be a positive number.");
        } else {
            return $numerator / $denominator;
        }
    } catch (CustomException1 $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    } catch (CustomException2 $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    } catch (Exception $e) {
        echo "Caught an unexpected exception: " . $e->getMessage() . "<br>";
    }
}

// Test the divideNumbers function
try {
    $result = divideNumbers(10, 2); // No exception
    echo "Result: $result<br>";

    $result = divideNumbers(10, 0); // CustomException1
    $result = divideNumbers(10, -5); // CustomException2
} catch (Exception $e) {
    echo "Caught an unexpected exception: " . $e->getMessage() . "<br>";
}
?>
