<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("ver_le","A",$conn)){
$sql = "SELECT firstname, lastname, email, tel_number, stellenname, unternehmen FROM `Nutzerdaten`";
$result = $conn->query($sql);

include '../Jsoncreate.php';
}
$conn->close();

?>
