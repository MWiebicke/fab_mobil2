<?php
include '../Connstart.php';
include '../Rechte.php';

if(rechte("acc_sc","A",$conn)){
$rolle = $_POST['rolle'];

$Rollen = "SELECT rollen_id, rollen_name FROM Rollen";
$result = $conn->query($Rollen);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
  if ($row['rollen_name'] == $rolle)
  {
    $rollen_id = $row['rollen_id'];
  }
}};

$passwort = $_POST['passwort'];

$email = $_POST['email'];


$errorm ="";

if ($rollen_id == NULL){
  $errorm .= "Bitte gültige Rolle auswählen! ";
}

if ($email==NULL){
    $errorm .= "Email eingeben ";}


if ($passwort==NULL){
  $errorm .= "Passwort eingeben ";
  }

if ($tel_number=NULL)
  {$tel_number=0;}

$passwort= hash('sha256', $passwort);

if ($errorm ==""){

    $sql = "INSERT INTO Nutzerdaten (passwort, rollen_id, email)
    VALUES ('$passwort', '$rollen_id', '$email')";

    if ($conn->query($sql) === TRUE) {
      header("Location: ../frontend/Adminpage/Nutzer.html");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
  echo $errorm;
}
}
$conn->close();
?>

