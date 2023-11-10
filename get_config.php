<?php
// Database configuration
$servername = "localhost";
$username = "u695223803_shivam123";
$password = "|05#nSb1V";
$database = "u695223803_shiv";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
