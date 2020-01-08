<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Create your account here</title>
<link rel="stylesheet" href="style2.css">
</head>


<body>
<body style="background-color:LightGray;">
<?php 
include ('../config.php'); //include to config για να βλέπουμε την ΒΔ

$target= "../avatars/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];


$error1="<h2>Username already exists! - use a different one";
$error2=" <h1> Error: Username & Password can't be blank!";
$uname=$_POST['uname'];
$pass=$_POST['password'];
$age=$_POST['age'];
$first=$_POST['first'];
$last=$_POST['last'];
$mail=$_POST['email'];
$city=$_POST['city'];

//κατεβασε απο τη βαση ολα τα username για ελεγχο διπλοτυπων
$sql="SELECT * FROM signup WHERE uname='$uname'";
$result = $conn->query($sql);


//ελεγχος για κενο username/pass
if (empty($uname) || empty($pass)) {echo($error2);}

//ελεγχος για διπλοτυπα username
else if ($row=$result->fetch(PDO::FETCH_ASSOC)) {echo($error1);}
//εισαγωγή δεδομένων στην ΒΔ (table:signup)

else {
$sql="insert into signup(uname,password,age,first_n,last_n,email,city,avatar) values('$uname','$pass','$age','$first','$last','$mail','$city', '$image')"; 
$result = $conn->query($sql);

move_uploaded_file($_FILES['image']['tmp_name'], $target);

header("Location:success.php");
}

?>