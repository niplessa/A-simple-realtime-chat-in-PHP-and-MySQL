<?php
session_start();
include ('../config.php'); //include to config για να βλέπουμε την ΒΔ


$last_n=$_POST['last_n'];

$sql="SELECT * FROM signup WHERE  last_n='$last_n'";
$result = $conn->query($sql);

//αμα δεν βρεις το Μικρό όνομα πηγαινε σε error page
if (!$row=$result->fetch(PDO::FETCH_ASSOC)){ //αν δεν υπάρχουν τα στοιχεία στην ΒΔ signup -> error
    header("Location:error1.php");
    
}
//αλλιως στειλε με $_SESSION το first_name της αναζητησης στο profile2.php και δειξε εκει τα στοιχεια του uname της αναζητησης
else {
    
    header("Location:profile_lastN.php");
    
    $_SESSION['last_n2'] = $last_n;
}



?>
