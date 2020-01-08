<?php
include ('../config.php'); 
session_start();

$uname=$_SESSION['username'];
$sql="delete from online_users where uname='$uname' ";
$conn->exec($sql);

session_destroy();

header("Location:../index.php");

?>
