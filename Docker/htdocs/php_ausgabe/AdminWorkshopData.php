<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("wor_le","A",$conn)){
$sql = "SELECT `workshop_id`, `titel`, `beschreibung`, `dauer` FROM `workshop`";
if (!$conn -> query($sql)) {
  echo("Error description: " . $conn -> error);
}
$result = $conn->query($sql);

include '../Jsoncreate.php';
}
$conn->close();

?>