
<?php
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT `veranstaltungs_id`,`datum`,`ort`,`startzeit`,`spezialisierung` FROM `veranstaltungen`";
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
