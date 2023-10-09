<!-- Write a program to start and end session variable. -->

<?php
// Start a PHP session
session_start();

// Set a session variable
$_SESSION['username'] = 'PHP';

// Display the session variable
echo "Session variable 'username' is set to: " . $_SESSION['username'] . "<br>";

// End the session
session_destroy();

// Check if the session variable is still accessible after destroying the session
if (isset($_SESSION['username'])) {
    echo "Session variable 'username' is still set: " . $_SESSION['username'];
} else {
    echo "Session variable 'username' is no longer set after destroying the session.";
}
?>
