<?php
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";

$veranstaltungsid = $_GET["veranstaltungs_id"];
// Create connection
//$veranstaltungsid = 1;
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM `Veranstaltungen` WHERE veranstaltungs_id = $veranstaltungsid";
$result = $conn->query($sql);

$conn->close();

?>
