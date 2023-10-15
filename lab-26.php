<!-- Write an example of error suppression. -->

<?php
// Intentional file error
$my_file = @file('non_existent_file') or die ("Failed opening file: error was '" . error_get_last()['message'] . "'");

// Will not issue a notice if the index $key doesn't exist.
$value = @$cache[$key];
?>
