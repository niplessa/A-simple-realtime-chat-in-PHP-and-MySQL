<?php
session_start();
//echo $_SESSION['username'];
include ('../config.php'); //include to config για να βλέπουμε την ΒΔ


$error = "<h1>Fields must not be left blank!</h1>";
$email=$_POST['email'];
$city=$_POST['city'];
$age=$_POST['age'];

$uname=$_SESSION['username'];



if (empty($email) || empty($city) || empty($age)) {echo($error);}

else {
//Ανανέωση πεδιων email,city
$sql = "UPDATE signup SET email='$email', city='$city', age='$age' WHERE uname='$uname'";
$stmt = $conn->prepare($sql);
$stmt->execute();

header("Location:update_sucess.php");
}



?>

