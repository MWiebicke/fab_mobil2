<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("ver_sc","S",$conn)){
$user_id = $_SESSION['user_id'];
$veranstaltungs_id =  $_GET['veranstaltungs_id'];

$sql = "SELECT * FROM `teilnehmer` WHERE veranstaltungs_id = $veranstaltungs_id";
$result = $conn->query($sql);

$rows = [];

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $rows[] = $row;
  }
  $jason = json_encode($rows);
} else {
  echo "0 results";
}
echo $jason;

$sql2 = "INSERT INTO Teilnehmer (user_id, veranstaltungs_id)
VALUES ( $user_id, $veranstaltungs_id)";

if ($conn->query($sql2) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>