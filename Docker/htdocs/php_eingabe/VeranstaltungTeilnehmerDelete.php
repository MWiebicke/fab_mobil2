<?php
include '../Connstart.php';
session_start();
$veranstaltungs_id=$_GET["veranstaltungs_id"];
$user_id=$_SESSION["user_id"];

$sql = "DELETE FROM `Teilnehmer` WHERE user_id = $user_id AND veranstaltungs_id = $veranstaltungs_id";
$result = $conn->query($sql);
$conn->close();
?>