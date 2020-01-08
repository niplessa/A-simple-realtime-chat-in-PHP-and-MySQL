<?php
session_start();
include ('../config.php'); //include to config για να βλέπουμε την ΒΔ


$uname=$_POST['uname'];

$sql="SELECT * FROM signup WHERE uname='$uname'";
$result = $conn->query($sql);

//αμα δεν βρεις το username πηγαινε σε error page
if (!$row=$result->fetch(PDO::FETCH_ASSOC)){ //αν δεν υπάρχουν τα στοιχεία στην ΒΔ signup -> error
    header("Location:error1.php");
    
}
//αλλιως στειλε με $_SESSION το username της αναζητησης στο profile2.php και δειξε εκει τα στοιχεια του uname της αναζητησης
else {
    $_SESSION['username2'] = $uname;
    header("Location:profile_uname.php");
}

?>

