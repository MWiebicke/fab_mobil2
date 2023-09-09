<?php
$servername = "host.docker.internal";
$username = "root";
$password = "1234";
$dbname = "SommerCamp";

$datum = $_POST["datum"];
$ort = $_POST["ort"];
$startzeit = $_POST["startzeit"];
$endzeit = $_POST["endzeit"];
$workshop = 1;
$spezialisierungen = $_POST["spezialisierungen"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `Veranstaltungen` (`datum`,`ort`, `startzeit`,`endzeit`,`workshop_id`,`spezialisierung`) 
        VALUES ('$datum','$ort','$startzeit:00','$endzeit:00','$workshop','$spezialisierungen')";

$conn->query($sql);

$conn->close();
header("Location: ../frontend/Adminpage/Veranstaltung.html");
?>