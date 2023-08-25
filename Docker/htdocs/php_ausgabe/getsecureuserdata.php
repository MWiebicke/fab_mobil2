<?php
session_start();
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";
        
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
        
        
$sql = "SELECT firstname, lastname, rollen_id, email, tel_number, stellenname, unternehmen, anrede, beschreibung FROM Nutzerdaten WHERE user_id = " . $_SESSION['user_id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo json_encode($row);
    die();
  }
} else {
  echo "0 results";
}
$conn->close();
