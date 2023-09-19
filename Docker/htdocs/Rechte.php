<?php
function rechte($recht,$r,$conn){
    session_start();
    $sqlr = "SELECT user_id,$recht FROM rollen LEFT JOIN nutzerdaten on Nutzerdaten.rollen_id = rollen.rollen_id WHERE user_id = " . $_SESSION['user_id'];

    $resultr = $conn->query($sqlr);
    if ($resultr->num_rows == 0) {
        echo "0";
    } else {
        while($row = $resultr->fetch_assoc()) {
            if ($row[$recht] == $r) {
                return TRUE;
            }else if($row[$recht] == "A"){
                return TRUE;
            }else{
                return FALSE;
            }
        die();
        }
    }
}
?>