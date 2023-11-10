<?php
$servername = "localhost";
$username = "u695223803_shivam123";
$password = "|05#nSb1V";
$database = "u695223803_shiv";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
