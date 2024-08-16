<?php

// Database connection parameters
$host = "localhost";
$user = "root";
$password = "";
$database = "login_db";

// Create a connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully.";

// Sample data
$name = $_POST["name"];
$email = $_POST["email"];
$members =$_POST["members"];
$number = $_POST["number"];
$address = $_POST["address"];

// Execute an INSERT query
$query = "INSERT INTO tickets(name, email, members, number, address) VALUES ('$name', '$email', $members, '$number', '$address')";

$result = mysqli_query($conn, $query);

// Display query results
if ($result) {
    echo ".";
} else {
    echo "Query failed: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>
