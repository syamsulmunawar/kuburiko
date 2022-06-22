<?php
    session_start();
    
    if(!isset($_SESSION["login_capil"])){
        header("Location: login.php");
        exit;
    }
    include 'function.php';
    include 'layout/app.php';

?>