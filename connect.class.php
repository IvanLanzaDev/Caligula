<?php
    $connect = mysqli_connect("mysql.hostinger.com.br","u640958987_cali","caligula");
        if($connect){
            mysqli_select_db($connect,"u640958987_cali");
        }else{
            echo "Erro Ao conectar com o banco";
        }
?>