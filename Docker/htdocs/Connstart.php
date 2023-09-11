<?php
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>