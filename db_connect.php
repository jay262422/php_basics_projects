<?php
$servername = "localhost";
$username = "root";  // Default username for XAMPP is 'root'
$password = "mydrive";      // Default password is empty for XAMPP
$dbname = "my_php_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
