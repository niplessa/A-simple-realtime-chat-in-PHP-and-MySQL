<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Create your account here</title>
<link rel="stylesheet" href="style2.css">
</head>

<body>
<body background="2.jpg">

<body style="background-color:LightGray;">

	<h1  style="margin-top: 0;padding: 20px;color: rgb(255, 230, 242); font-size:50px; font-family:italic; text-align:center;">Sign up if you don't have an account</h1>
	<div class="container">
	<form method="post" action="handlers/signup.php" enctype="multipart/form-data"  style="color: #000000; font-size:20px; font-family:italic;">
		Please enter desired <b>username</b>: <input type="text" name="uname" /><br>
		<br> Please enter desired <b>password</b>: <input type="password"
			name="password" /> <br>
		<br> Please enter your <b>e-mail</b>	: <input type="text" name="email" /> <br>
		<br> Please enter your <b>age</b>: <input type="text" name="age" /> <br>
		<br> Please enter your <b>first name</b>: <input type="text" name="first" /> <br>
		<br> Please enter your <b>last name</b>: <input type="text" name="last" /> <br>
		<br> Please enter your <b>city</b>: <input type="text" name="city" /> <br>
		<br>
		Upload your <b>profile picture</b> here!<br><br>
		<input type="hidden" name="size" value="1000000">
			<input type="file" name="image"> <br><br>
				<button style="background-color: #004d4d; color: white;"submit">
			<b>Signup</b>
		</button>
		
		
	</div>
	
<h3>Back to: <a href="index.php" style="color: #004d4d" align="middle">Login</a><h3>




</body>