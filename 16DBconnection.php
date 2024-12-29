<?php
// Database configuration
$servername = "localhost"; // or the IP address of your MySQL server
$username = "root";        // MySQL username
$password = "";            // MySQL password (empty by default in XAMPP)
$database = "userData"; // The name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>