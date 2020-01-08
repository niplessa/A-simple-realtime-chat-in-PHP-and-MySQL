<?php 
session_start();
include ('config.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Webchat</title>
<link rel="stylesheet" href="style.css">

<!-- Για εισαγωγή Jquery -->
<script src="https://code.jquery.com/jquery-3.4.1.js" 
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous">
</script>
	
</head>
<body>
<body background="2.jpg">
<body style="background-color:LightGray;">
<br>	
	
	
<div class="navbar">
  <a href="chat.php">Chat</a>
  <a href="search_page.php">Search</a>
    <a href= "handlers/profile.php">Profile</a>
   <a href="handlers/logout.php">Logout</a>
</div>
<br><br>
<h1 style="background-color:#99D9EA; color:white;"  align="center"><?php echo $_SESSION['username']; ?>,welcome to the Chat!</h1>
	
	
	<?php 
	
	//εμφανιση online users
$stmt = $conn->prepare("SELECT uname FROM online_users");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
echo ("<h3> <font color='blue'>Online Users: </font color></h3>"); //echo("<br>");
//τρεξε loop ολο τον πινακα που εφερες απο τη βάση
while ($row = $stmt->fetch()) 
{print  "<h2>"  .$row['uname']  ;}
{print "</h2>";}
	?>
	
<br>
	<div id="wrapper">
	
		<div class="chat_wrapper">
			<div id="chat"></div>

			<form method="POST" id="message_form">
			<br>
				<textarea name="message" placeholder="Type your message here" cols="30" rows="1" class="textarea"></textarea>
				<input type="submit" value="Send">
			</form>
		</div>
	</div>
	
	
	
	

<!-- Για εισαγωγή Jquery -->
<script>
loadChat();

 
//AYTOMATH ANANEWSH KA8E 1" έτσι ώστε να βλέπεις κατευθείαν τα μηνύματα
setInterval(function() {
	loadChat();
},1000);

//ανάκτηση μηνυμάτων από ΒΔ
function loadChat() { 
	$.post('handlers/messages.php?action=getMessages', function(response) {

		var scrollpos = $('#chat').scrollTop();
		var scrollpos = parseInt(scrollpos) + 520;
		var scrollHeight = $('#chat').prop('scrollHeight');

		//το response να πάει στο #chat
		$('#chat').html(response);
		
		//διόρθωση autoscroll λόγω autoupdate (να μπορείς να σκρολλάρεις πάνω στα μηνύματα χωρίς να σε κατεβάζει κάτω κάθε 1"

		if(scrollpos < scrollHeight) { 
			}

		else {
		
		$('#chat').scrollTop($('#chat').prop('scrollHeight') );
		}
	});
}

//τι γινεται αν πατηθει το enter (ascii code = 13) -> Αποστολή του περιεχομένου της φόρμας (μήνυμα) στη ΒΔ
$('.textarea').keyup(function() {
	if(event.which == 13) {
		$('form').submit();	
			}	
});

//αποστολή μηνύματος μέσω post στο messages
$('form').submit(function(){           
	var message = $('.textarea').val();
	$.post('handlers/messages.php?action=sendMessage&message='+message, function(response) {
		
		//alert(response);

		
//καθάρισμα φόρμας μετά την αποστολή μηνύματος	
		if( response==1 )	{
			loadChat(); //ξανακαλω την loadchat για να φανει το μηνυμα κατευθειαν
			document.getElementById('message_form').reset(); 
		}

			
			});
	return false;

});



</script>

</body>