<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "generalstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT product_id, name, description, price FROM products";
$result = $conn->query($sql);
