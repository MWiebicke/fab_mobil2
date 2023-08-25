
<?php
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `veranstaltungen`";
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
