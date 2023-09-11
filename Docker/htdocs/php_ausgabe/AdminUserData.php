<?php
include '../Connstart.php';

$sql = "SELECT firstname, lastname, rollen_id, email, tel_number, stellenname, unternehmen, anrede, beschreibung, user_id FROM `Nutzerdaten`";
$result = $conn->query($sql);

include '../Jsoncreate.php';
$conn->close();

?>