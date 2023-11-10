<?php  
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "u695223803_shivam123";  
$dbPassword = "|05#nSb1V";  
$dbName     = "u695223803_shiv";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}