<!-- Write a program to insert 5 customers record in database. Assume database name and table name yourself. -->

<?php

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

// Clients data
$customers = array(
    array('Kushal Shrestha', 'kushal@email.com', 'Kathmandu'),
    array('Jane Doe', 'jane@email.com', 'Pokhara'),
    array('Bob Smith', 'bob@email.com', 'Dhangadi'),
    array('Alice Johnson', 'alice@email.com', 'Pokhara'),
    array('Charlie Brown', 'charlie@email.com', 'Biratnagar')
);

// Inserting clients records into the database
foreach ($customers as $customer) {
    $name = mysqli_real_escape_string($conn, $customer[0]);
    $email = mysqli_real_escape_string($conn, $customer[1]);
    $city = mysqli_real_escape_string($conn, $customer[2]);

    $sql = "INSERT INTO clients (name, email, city) VALUES ('$name', '$email', '$city')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully.<br>";
    } else {
        echo "Error inserting record: " . mysqli_error($conn) . "<br>";
    }
}

mysqli_close($conn);
?>