<!-- Write a program to display customers who are from "Pokhara" City. Take references of table and database from Q-18 -->

<?php

// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'labDB';

// Creating a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Checking the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetching clients
$city = 'Pokhara';
$sql = "SELECT * FROM clients WHERE city = '$city'";
$result = mysqli_query($conn, $sql);

// Checking if there are results
if (mysqli_num_rows($result) > 0) {
    // Display customer information
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Customer Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
    }
} else {
    echo "No customers found from $city.";
}

mysqli_close($conn);

?>