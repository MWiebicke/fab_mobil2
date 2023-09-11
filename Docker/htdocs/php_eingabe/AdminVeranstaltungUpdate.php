<?php
include '../Connstart.php';

$veranstaltungs_id = $_GET['veranstaltungs_id'];

$sql = "UPDATE Veranstaltungen SET
datum='". $_POST['datum'] . "',e
ort='". $_POST['ort'] ."',
startzeit='". $_POST['startzeit'] ."',
endzeit='". $_POST['endzeit'] ."',
workshop='". $_POST['workshop'] ."',
spezialisierung='". $_POST['spezialisierung'] ."' WHERE veranstaltungs_id = " . $veranstaltungs_id;

//echo $sql;


// var_dump($_POST);

if ($conn->query($sql) === TRUE) {
    header("Location: ../frontend/Adminpage/Nutzer.html");
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();