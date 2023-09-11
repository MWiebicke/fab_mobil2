<?php
include '../Connstart.php';

$veranstaltungs_id =  $_GET['veranstaltungs_id'];

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