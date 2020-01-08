<?php
include ('../config.php'); //include to config για να βλέπουμε την ΒΔ
session_start();
$uname=$_SESSION['username'];


$target= "../avatars/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];

$sql="UPDATE signup SET avatar='$image' WHERE uname='$uname'";
$result = $conn->query($sql);


move_uploaded_file($_FILES['image']['tmp_name'], $target);

header("Location:../profile_update.php");
?>