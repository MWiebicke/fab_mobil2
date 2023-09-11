<?php
include '../Connstart.php';
session_start();

$user_id = $_GET["user_id"];

$sql = "SELECT `user_id`,`firstname`,`lastname`,`rollen_id`,`email`,`tel_number`,`stellenname`,`unternehmen`, `anrede`,`anrede`,`beschreibung` FROM `Nutzerdaten` WHERE user_id = $user_id";
$result = $conn->query($sql);

include '../Jsoncreate.php';
$conn->close();

?>