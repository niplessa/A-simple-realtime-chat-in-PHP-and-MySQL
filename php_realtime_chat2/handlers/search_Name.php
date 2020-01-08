<?php
session_start();
include ('../config.php'); //include to config για να βλέπουμε την ΒΔ


$first_n=$_POST['first_n'];
$last_n=$_POST['last_n'];

$sql="SELECT * FROM signup WHERE first_n='$first_n' OR last_n='$last_n'";
$result = $conn->query($sql);

//αμα δεν βρεις το Μικρό όνομα πηγαινε σε error page
if (!$row=$result->fetch(PDO::FETCH_ASSOC)){ //αν δεν υπάρχουν τα στοιχεία στην ΒΔ signup -> error
    header("Location:error1.php");
    
}
//αλλιως στειλε με $_SESSION το first_name της αναζητησης στο profile2.php και δειξε εκει τα στοιχεια του uname της αναζητησης
else {
    $_SESSION['first_n2'] = $first_n;
    header("Location:profile_firstN.php");
    
    $_SESSION['last_n2'] = $last_n;
}



?>
