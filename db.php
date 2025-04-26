<?php
$host = "localhost";
$user = "root";        // Default in XAMPP
$password = "Bhavesh@8625";        // Leave blank for XAMPP
$dbname = "cafe_nespresso";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
