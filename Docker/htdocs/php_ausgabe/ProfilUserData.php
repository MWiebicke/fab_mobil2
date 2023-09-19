<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("acc_le","S",$conn)){
$sql = "SELECT `user_id`,`firstname`,`lastname`,`email`,`tel_number`,`stellenname`,`unternehmen`, `anrede`,`anrede`,`beschreibung` FROM `Nutzerdaten` WHERE user_id = " . $_SESSION['user_id'];
$result = $conn->query($sql);

include '../Jsoncreate.php';
}
$conn->close();

?>