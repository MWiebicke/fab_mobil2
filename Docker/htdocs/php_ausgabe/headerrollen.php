<?php
include '../Connstart.php';
session_start();
$user_id = $_SESSION['user_id'];

$sql = "SELECT rollen.rollen_id,user_id FROM rollen LEFT JOIN nutzerdaten on Nutzerdaten.rollen_id = rollen.rollen_id WHERE user_id = $user_id";
//echo $sql;
$result = $conn->query($sql);

$rows = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $rows[] = $row;
  }

  echo json_encode($rows);
} else {
  //echo "0 results";
}
$conn->close();

?>