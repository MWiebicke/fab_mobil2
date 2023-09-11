<?php
include '../Connstart.php';

$veranstaltungsid = $_GET["veranstaltungs_id"];

$sql = "SELECT * FROM Veranstaltungen LEFT JOIN Workshop on Veranstaltungen.workshop_id = Workshop.workshop_id WHERE veranstaltungs_id = $veranstaltungsid";
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
