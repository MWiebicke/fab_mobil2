
<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("ver_le","A",$conn)){
$sql = "SELECT `veranstaltungs_id`,`datum`,`ort`,`startzeit`,`spezialisierung` FROM `veranstaltungen`";
if (!$conn -> query($sql)) {
  echo("Error description: " . $conn -> error);
}
$result = $conn->query($sql);

include '../Jsoncreate.php';
}
$conn->close();

?>
