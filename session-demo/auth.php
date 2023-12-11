<?php
// for session start
 session_start();
// session create => $_SESSION['user']
if(!$_SESSION['email']){
    header("Location:index.php");
}
?>