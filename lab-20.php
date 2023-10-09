<!-- Write a program to set cookie value and display it. -->

<?php
// Set a cookie with the name "my_cookie" and the value "Hello, Cookie!"
$cookieName = "my_cookie";
$cookieValue = "Hello, Cookie!";
$cookieExpiration = time() + 3600; // Cookie will expire in 1 hour

setcookie($cookieName, $cookieValue, $cookieExpiration);

// Check if the cookie is set and display its value
if (isset($_COOKIE[$cookieName])) {
    $displayValue = $_COOKIE[$cookieName];
} else {
    $displayValue = "Cookie not set.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h1>Cookie Example</h1>
    
    <p>Cookie Value: <?php echo $displayValue; ?></p>
</body>
</html>
