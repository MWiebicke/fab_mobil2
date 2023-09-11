<?php
include '../Connstart.php';

$sql = "SELECT firstname, lastname, email, tel_number, stellenname, unternehmen FROM `Nutzerdaten`";
$result = $conn->query($sql);

include '../Jsoncreate.php';
$conn->close();

?>
