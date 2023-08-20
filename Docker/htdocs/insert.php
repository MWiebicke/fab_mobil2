<?php

$servername = "host.docker.internal";
$username = "SommerCamp";
$password = "Sommer2023";
$dbname = "SommerCamp";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `Teilnehmer` (`user_id`,`veranstaltugs_id`) VALUES ('$user_id', '$veranstaltungs_id', '1')";
$result = $conn->query($sql);

$conn->close();
?>