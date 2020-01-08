<?php
session_start();

include ('../config.php'); //include to config για να βλέπουμε την ΒΔ

switch($_REQUEST['action'] ) {
    
    case "sendMessage":
        //global $db;
        
        //βαλε τα μηνύματα στη βαση
        $query = $conn->prepare("INSERT INTO messages SET user=?, message=?");
        $run = $query->execute([$_SESSION['username'], $_REQUEST['message']]);
        
        
        if($run) {
            echo 1;
            exit;
        }
        
        break;   
        
    case "getMessages":
        //echo('working');
        
        $query = $conn->prepare("SELECT * FROM  messages");
        $run = $query->execute();
        
        $rs = $query->fetchAll(PDO::FETCH_OBJ);
        
        $chat = '';
        foreach ($rs as $message) {
            
            // .= $message->message.'<br />'; //κάθε μήνυμα σε ξεχωριστή γραμμή
            
            //δημιουργία κλάσης single-message με χρήστη-μηνυμα-timestamp
            $chat .= '<div class="single-message"> 
            <strong>'.$message->user.'</strong> <i>says</i><strong>:</strong> 
            <strong>'.$message->message.'</strong>

           <span>'.$message->date.'</span>

            </div>';
            
            
                
        }
        
        echo $chat;
        
        break;
}

?>