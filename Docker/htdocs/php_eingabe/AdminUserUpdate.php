<?php
include '../Connstart.php';

$user_id = $_GET['user_id'];

$sql = "UPDATE Nutzerdaten SET
anrede='". $_POST['anrede'] . "',
lastname='" . $_POST['lastname'] ."',
firstname='". $_POST['firstname'] ."',
unternehmen='". $_POST['unternehmen'] ."',
stellenname='". $_POST['stellenname'] ."',
email='". $_POST['email'] ."',
tel_number='". $_POST['tel_number'] ."',
beschreibung='". $_POST['beschreibung'] ."' WHERE user_id = " . $user_id;

//echo $sql;


// var_dump($_POST);

if ($conn->query($sql) === TRUE) {
    header("Location: ../frontend/Adminpage/Nutzer.html");
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();