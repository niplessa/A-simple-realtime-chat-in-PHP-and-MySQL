<?php 
session_start();
include ('../config.php');?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Profile Page</title>
<link rel="stylesheet" href="style2.css">
</head>

<body background="../2.jpg">
<body style="background-color: LightGray;">

<div class="navbar">
<a href="../chat.php">Chat</a>
<a href="../search_page.php">Search</a>
<a href= "profile.php">Profile</a>
<a href="logout.php">Logout</a>
</div>
<br>
<?php $uname=$_SESSION['username2'];  ?>

<h1 style="background-color:#99D9EA; color:white;"  align="center">You searched for: <?php echo($uname); ?></h1>

<?php
//τραβα ολα τα στοιχεια του χρηστη με βαση το SESSION username για να δημιουργησεις το profile
$stmt = $conn->prepare("SELECT * FROM signup WHERE uname='$uname' ");
$stmt->bindParam(':uname', $_GET['uname']);
$stmt->execute();
$row = $stmt->fetch();

$age=$row['age'];
$first=$row['first_n'];
$last=$row['last_n'];
$mail=$row['email'];
$city=$row['city'];
$avatar=$row['avatar'];

?>


    


<br>
<div class="image-wrapper">
<h1 align="center"><b>Profile Picture</b>: <?php echo"<img src='../avatars/".($avatar)."'"?>;</h1>
</div>

<div class=profileBox>
<h1 align="center"><b>First Name:</b> <?php echo($first)?></h1>
<hr width="25%">
<h1 align="center">Last Name: <?php echo($last)?></h1>
<hr width="25%">
<h1 align="center">Age: <?php echo($age)?></h1>
<hr width="25%">
<h1 align="center"><b>Email</b>: <?php echo($mail)?></h1>
<hr width="25%">
<h1 align="center"><b>City</b>: <?php echo($city)?></h1>
<hr width="25%">

<br>
</div>
