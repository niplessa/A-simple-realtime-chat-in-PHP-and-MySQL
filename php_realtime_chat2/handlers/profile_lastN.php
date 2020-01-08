<?php
session_start();
include ('../config.php');
?>

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
		<a href="../chat.php">Chat</a> <a href="../search_page.php">Search</a>
		<a href="profile.php">Profile</a> <a href="logout.php">Logout</a>
	</div>
	<br>
<?php $last_n=$_SESSION['last_n2'];?>

<h1 style="background-color: #99D9EA; color: white;" align="center">You searched for last name: <?php echo($last_n); ?></h1>

<?php
// τραβα ολα τα στοιχεια του χρηστη με βαση το SESSION last Name για να δημιουργησεις το profile
$stmt = $conn->prepare("SELECT * FROM signup WHERE last_n LIKE '%".$last_n."%' ");
//$stmt->bindParam(':last_n', $_GET['last_n']);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

?>

<div class=profileBox>
<?php
while ($row = $stmt->fetch() ) {    
    print '<p><center><table></center></p>';
    print '<h1>' . $row["uname"] . "'s Profile</h1>";
    print '<tr><td><h2>Firstname:</td><td>';
    print "<h2>" .$row["first_n"];
    print '<tr><td><h2>Lastname:</td><td>';
    print "<h2>" .$row["last_n"];
    print '<tr><td><h2>Age:</td><td>';
    print "<h2>" . $row["age"];
    print '<tr><td><h2>email:</td><td>' . $row["email"] . '</td></tr>';
    print '<tr><td><h2>city:</td><td>' . $row["city"] . '</td></tr>';
    
    print"<hr width=25%>";
    echo'<br>';
    
    
}
?>
</div>
