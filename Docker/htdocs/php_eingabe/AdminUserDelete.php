<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("acc_loe","A",$conn)){
$user_id = $_GET["user_id"];

$sql = "DELETE FROM `nutzerdaten` WHERE user_id = $user_id";
$result = $conn->query($sql);
}
$conn->close();

?>
