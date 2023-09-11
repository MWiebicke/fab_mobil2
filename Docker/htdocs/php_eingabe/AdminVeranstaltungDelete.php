<?php
include '../Connstart.php';

$veranstaltungsid = $_GET["veranstaltungs_id"];

$sql = "DELETE FROM `Veranstaltungen` WHERE veranstaltungs_id = $veranstaltungsid";
$result = $conn->query($sql);

$conn->close();

?>
