<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update your profile info</title>
<link rel="stylesheet" href="style2.css">
</head>

<body>
<body background="2.jpg">

<body style="background-color:LightGray;">

<h1  style="margin-top: 0;padding: 20px;color: rgb(255, 230, 242); font-size:50px; font-family:italic; text-align:center;">Update your information here</h1>
	<div class="container">
	<form method="post" action="handlers/prof_update.php" style="color: #000000; font-size:20px; font-family:italic;">
		<br> Please enter your new <b>e-mail</b>	: <input type="text" name="email" /> <br>
		<br> Please enter your new  <b>city</b>: <input type="text" name="city" /> <br>
		<br> Please enter your   <b>age</b>: <input type="text" name="age" /> <br>
		
		<br>
    
		<button style="background-color: #004d4d; color: white;"submit">
		
			<b>Update</b>
		</button>
	</form>
		</div>
			<h3  >Update your profile picture here: </h3><br>
		<form method="post" action="handlers/upload.php" enctype="multipart/form-data" style="color: #000000; font-size:20px; font-family:italic;>
		<input type="hidden" name="size" value="1000000">
			<input type="file" name="image"> <br><br>
			<input type="submit" name="upload" value="Update profile picture">
		</form>
<h3 style="text-align:left; color: #004d4d">Back to <a style="color: #004d4d"  href=handlers/profile.php>Profile</a></h3>