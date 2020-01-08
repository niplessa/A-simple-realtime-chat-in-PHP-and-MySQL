<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Search</title>
<link rel="stylesheet" href="style2.css">
</head>

<body>


<body background="2.jpg">


<body style="background-color: LightGray;">

	<div class="navbar">
		<a href="chat.php">Chat</a> <a href="search_page.php">Search</a> <a
			href="handlers/profile.php">Profile</a> <a href="handlers/logout.php">Logout</a>
	</div>

	<br>
	<h1 style="background-color: #99D9EA; color: white;" align="center">Search
		for a specific user</h1>
	<h2>Search by username:</h2>
	<div class="container">
		<form method="post" action="handlers/search.php">
			Username: <input type="text" name="uname" /><br>
			<button style="background-color: #004d4d; color: white;"submit">
				<b>Search</b>
			</button>
		</form>
	</div>

	<h2>Search by first or last name:</h2>
	<div class="container">
		<form method="post" action="handlers/search_Name.php">
			First name: <input type="text" name="first_n" /><br> 
						<button style="background-color: #004d4d; color: white;"submit">
				<b>Search</b>
			</button>
		</form>
	</div>
	
		<div class="container">
		<form method="post" action="handlers/search_LastName.php">
						Last name: <input	type="text" name="last_n" /><br>
			<button style="background-color: #004d4d; color: white;"submit">
				<b>Search</b>
			</button>
		</form>
	</div>