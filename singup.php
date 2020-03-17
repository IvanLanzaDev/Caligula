<?php

    include("connect.class.php");
    $email = $_POST['email_user'];
    $password = $_POST['password_user'];

    include('connect.class.php');

    $query_user = mysqli_query($connect,"SELECT * FROM user WHERE email_user = '$email' AND password_user = '$password'");
    $count_user = mysqli_num_rows($query_user);

    if($count_user > 0){
        session_start();
        $_SESSION["email_user"] = $email;
        $_SESSION["password_user"] = $password;
        $get_info_user_login = mysqli_fetch_array($query_user);
        $user_adm = $get_info_user_login['adm_user'];
        if($user_adm == 1){
            header("Location: admin.php");
        }else{
           header("Location: home.php"); 
        }
    }else{
        header("Location: login.php");
    }
?>