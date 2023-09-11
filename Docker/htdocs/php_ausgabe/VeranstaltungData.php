<?php
include '../Connstart.php';

$veranstaltungsid = $_GET["veranstaltungs_id"];

$sql = "SELECT * FROM Veranstaltungen LEFT JOIN Workshop on Veranstaltungen.workshop_id = Workshop.workshop_id WHERE veranstaltungs_id = $veranstaltungsid";
$result = $conn->query($sql);

include '../Jsoncreate.php';
$conn->close();

?>
