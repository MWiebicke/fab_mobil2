<?php
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";

$user_id = $_GET["user_id"];
// Create connection
//$veranstaltungsid = 1;
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM `nutzerdaten` WHERE user_id = $user_id";
$result = $conn->query($sql);

$conn->close();

?>
