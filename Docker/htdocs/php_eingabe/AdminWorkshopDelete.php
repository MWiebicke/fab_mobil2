<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("wor_loe","A",$conn)){
$workshop_id = $_GET["workshop_id"];

$sql = "DELETE FROM `Workshop` WHERE workshop_id = $workshop_id";
$result = $conn->query($sql);
}
$conn->close();

?>