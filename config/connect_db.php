<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "MKTIMEWATCHES"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM products";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>
