<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("ver_le","A",$conn)){

  $veranstaltungs_id = $_GET["veranstaltungs_id"];
  $sql = "SELECT `veranstaltungs_id`,`datum`,`ort`,`startzeit`,`endzeit`,`spezialisierung`,`workshop_id` FROM `veranstaltungen` WHERE veranstaltungs_id = $veranstaltungs_id";
   if (!$conn -> query($sql)) {
     echo("Error description: " . $conn -> error);
  }
  $result = $conn->query($sql);

  include '../Jsoncreate.php';
}
$conn->close();

?>