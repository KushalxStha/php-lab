<!-- Illustrate with an example, how top level handler can handle exceptions without catch block. -->

<?php
function customExceptionHandler($exception) {
    echo "Unhandled Exception: " . $exception->getMessage() . "<br>";
}

// Set the top-level exception handler
set_exception_handler('customExceptionHandler');

function triggerException() {
    throw new Exception("This is an uncaught exception.");
}

// Trigger an exception without a catch block
triggerException();

echo "This will not be reached.";
?>
