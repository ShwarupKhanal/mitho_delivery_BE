<?php
// Replace these variables with your MySQL database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'MithoDelivery';

// Establish a connection to the MySQL database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>