<!-- Write an example of error suppression. -->

<?php
// Using the @ operator

// Suppressing a file opening error:
$file = @fopen("nonexistent.txt", "r");
if (!$file) {
    echo "Failed to open file. It may not exist.";
} else {
    fclose($file);
}
?>