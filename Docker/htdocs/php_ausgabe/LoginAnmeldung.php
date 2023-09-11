<?php
include '../Connstart.php';

$email=$_GET["email"];
$passwort=$_GET["passwort"];
$passwort = hash('sha256', $passwort);

$sql = "SELECT user_id FROM Nutzerdaten WHERE email = '$email' AND passwort = '$passwort'";

$result = $conn->query($sql);
if ($result->num_rows == 0) {
  
    header("Location: ../frontend/Loginpage/Anmeldung.html");
} else {
    session_start();
    while($row = $result->fetch_assoc()) {
      $_SESSION['user_id']= $row["user_id"];  //*user id die in $sql=..... selcetiert wird */;
      header("Location: ../frontend/Kalenderpage/kalender4.html");
      die();
    }
}
$conn->close();
?>