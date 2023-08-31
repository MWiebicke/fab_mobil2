<?php
session_start();
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";

$user_id = $_SESSION['user_id'];
//$user_id = 2;
$veranstaltungs_id =  $_GET['veranstaltungs_id'];
//$veranstaltungs_id = 1;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

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
$result2 = $conn->query($sql2);

if ($conn->query($sql2) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>