<?php
include '../Connstart.php';

$user_id = $_GET["user_id"];

$sql = "DELETE FROM `nutzerdaten` WHERE user_id = $user_id";
$result = $conn->query($sql);

$conn->close();

?>
