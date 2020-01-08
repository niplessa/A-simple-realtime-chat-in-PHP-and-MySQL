<?php
session_start();
//echo $_SESSION['username'];
echo("yo yo yo");
include ('../config.php'); //include to config για να βλέπουμε την ΒΔ

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Profile Page</title>
<link rel="stylesheet" href="style2.css">
</head>

<body>
<body background="../2.jpg">

<div class="navbar">
  <a href="../chat.php">Chat</a>
  <a href="../search_page.php">Search</a>
    <a href= "profile.php">Profile</a>
   <a href="logout.php">Logout</a>
</div>
<br>
<h1 style="background-color:#99D9EA; color:white;"  align="center"><?php echo $_SESSION['username']; ?>'s profile page</h1>

<?php
//τραβα ολα τα στοιχεια του χρηστη με βαση το SESSION username για να δημιουργησεις το profile
$uname=$_SESSION['username'];
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


<div class="image-wrapper">
<h1 align="center"><b>Profile Picture</b>: <?php echo"<img src='../avatars/".($avatar)."'"?>;</h1>
</div>

<div class=profileBox>
<hr width="25%">
<h1 align="center"><b>First Name:</b> <?php echo($first)?></h1>
<hr width="25%">
<h1 align="center">Last Name: <?php echo($last)?></h1>
<hr width="25%">
<h1 align="center">Age: <?php echo($age)?></h1>
<hr width="25%">
<h1 align="center"><b>Email</b>: <?php echo($mail)?></h1>
<hr width="25%">
<h1 align="center"><b>City</b>: <?php echo($city)?></h1>


<br>
</div>
<br>
<h2 align="middle">Update your profile <a href="../profile_update.php" style="color: #004d4d" align="middle">here</a><h2>
