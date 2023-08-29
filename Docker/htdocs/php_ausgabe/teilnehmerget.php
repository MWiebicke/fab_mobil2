<?php
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";

$veranstaltungs_id =  $_GET['veranstaltungs_id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Teilnehmer LEFT JOIN Nutzerdaten on Teilnehmer.user_id = Nutzerdaten.user_id WHERE Teilnehmer.veranstaltungs_id = $veranstaltungs_id";

$result = $conn->query($sql);

$rows = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $rows[] = $row;
  }

  echo json_encode($rows);

} else {
}
$conn->close();

?>