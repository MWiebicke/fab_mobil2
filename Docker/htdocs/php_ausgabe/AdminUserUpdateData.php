<?php
include '../Connstart.php';
session_start();

$user_id = $_GET["user_id"];

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT `user_id`,`firstname`,`lastname`,`rollen_id`,`email`,`tel_number`,`stellenname`,`unternehmen`, `anrede`,`anrede`,`beschreibung` FROM `Nutzerdaten` WHERE user_id = $user_id";
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