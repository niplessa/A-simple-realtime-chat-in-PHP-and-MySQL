<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Welcome to the chat!</title>
<link rel="stylesheet" href="style2.css">
</head>

<body>
<body background="1.jpg">
<body style="background-color:LightGray;">

	<h1  style="color: rgb(109, 198, 168); font-size:50px; font-family:italic; text-align:center;"><b>Welcome to chat!</b></h1>
	<h2 style="color: rgb(109, 200, 170); font-size:25px; font-family:italic;">Login here:</h2>
	  <div class="container">
	<form method="post" action="handlers/login.php">
		Please enter your <b>username</b>: <input type="text" name="uname" /><br>
		Please enter your <b>password</b>: <input type="password" name="password" />
		<br>
		<br>
		<button style="background-color: #6495ed; color: white;"submit">
			<b>Login</b>
		</button>
	</form>
	</div>
	
<h3>If you don't have an account, create one here: <a href="register.php" style="color: #004d4d" align="middle">Register</a><h3>

</body>