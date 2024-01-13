<?php
 session_start();// for session start
// session create => $_SESSION['user']
if(!$_SESSION['email']){
    header("Location:index.php");
}
?>