<?php
include '../Connstart.php';
session_start();

$sql = "SELECT `user_id`,`firstname`,`lastname`,`email`,`tel_number`,`stellenname`,`unternehmen`, `anrede`,`anrede`,`beschreibung` FROM `Nutzerdaten` WHERE user_id = " . $_SESSION['user_id'];
$result = $conn->query($sql);


$rows = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $rows[] = $row;
  }

  echo json_encode($rows);
} else {
  echo "0 results";
}
$conn->close();

?>