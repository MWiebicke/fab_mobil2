<?php
include '../Connstart.php';

$sql = "SELECT `veranstaltungs_id`,`datum`,`ort`,`startzeit`,`spezialisierung`,`workshop_id` FROM `veranstaltungen`";
if (!$conn -> query($sql)) {
  echo("Error description: " . $conn -> error);
}
$result = $conn->query($sql);

$rows = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //var_dump($row);
    $rows[] = $row;
  }

  echo json_encode($rows);

} else {
}
$conn->close();

?>