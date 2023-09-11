<?php
include '../Connstart.php';

$sql = "SELECT firstname, lastname, email, tel_number, stellenname, unternehmen FROM `Nutzerdaten`";
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
