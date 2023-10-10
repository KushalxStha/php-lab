<!-- Write an example of error handlers to print error. -->

<?php
// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Error [$errno]: $errstr in $errfile on line $errline<br>";
}

// Set the custom error handler
set_error_handler("customErrorHandler");

// Trigger some errors for demonstration
echo $undefinedVariable; // This will generate a notice-level error
$fileNotFound = fopen("non_existent_file.txt", "r"); // This will generate a warning-level error

// Restore the default error handler
restore_error_handler();

// Trigger another error after restoring the default handler
echo $undefinedVariableAgain; // This will generate a notice-level error
?>