<?php
    //σεταρισμα ΒΔ στον mysqlsrv του xampp: (host - όνομα - username - κωδικός)
    $dbhost = 'localhost';
    $dbname = 'chat';
    $dbuser = 'root';
    $dbpass = '';
    
    //establish connection -> PDO method (ώστε η βάση να είναι ορατή από κάθε .php. Εναλλακτικά θα μπορούσε να χρησιμοποιηθεί MySQLi
    try{
        $conn = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
 ?>