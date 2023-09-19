<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("ver_loe","A",$conn)){
$veranstaltungsid = $_GET["veranstaltungs_id"];

$sql = "DELETE FROM `Veranstaltungen` WHERE veranstaltungs_id = $veranstaltungsid";
$result = $conn->query($sql);
}
$conn->close();

?>
