<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("wor_sc","A",$conn)){
$titel = $_POST["titel"];
$beschreibung = $_POST["beschreibung"];
$dauer = $_POST["dauer"];


$sql = "INSERT INTO `workshop`(`titel`, `beschreibung`, `dauer`) VALUES 
            ('$titel','$beschreibung','$dauer')";

$conn->query($sql);
}
$conn->close();
header("Location: ../frontend/Adminpage/workshop.html");