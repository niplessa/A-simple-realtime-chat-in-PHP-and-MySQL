<?php
//steile to username σε οποιον το ζηταει (πχ messages)
session_start();
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
}

?>