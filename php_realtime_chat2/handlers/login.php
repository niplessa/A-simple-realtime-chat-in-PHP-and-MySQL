<?php 
session_start();
include ('../config.php'); //include to config για να βλέπουμε την ΒΔ


$uname=$_POST['uname'];
$pass=$_POST['password'];

//έλεγχος στοιχείων login με ΒΔ signup

$sql="SELECT * FROM signup WHERE uname='$uname' AND password='$pass'";
$result = $conn->query($sql);

if (!$row=$result->fetch(PDO::FETCH_ASSOC)){ //αν δεν υπάρχουν τα στοιχεία στην ΒΔ signup -> error
    header("Location:error.php");
   
}

else {
    
    //αποθηκευσε την μεταβλητη ονοματος χρηστη στην global session μτβλ _SESSION['username'] για να χρησιμοποηθεί μετά
    $_SESSION['username']=$uname;    
    $sql="insert into online_users(uname) values('$uname')";
    $result = $conn->query($sql);
    header("Location:../chat.php"); //και προχώρησε στην κύρια σελίδα του chat
}

?>