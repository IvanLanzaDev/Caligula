<?php
    session_start();
    include('functions.class.php');
    if(isset($_SESSION["email_user"]) || isset($_SESSION["password_user"])){
            session_destroy();
            header("location: home.php");
            exit();
        }
?>