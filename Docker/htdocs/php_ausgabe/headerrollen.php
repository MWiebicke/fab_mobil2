<?php
include '../Connstart.php';
session_start();
$user_id = $_SESSION['user_id'];

$sql = "SELECT rollen.rollen_id,user_id FROM rollen LEFT JOIN nutzerdaten on Nutzerdaten.rollen_id = rollen.rollen_id WHERE user_id = $user_id";
//echo $sql;
$result = $conn->query($sql);

include '../Jsoncreate.php';
$conn->close();

?>