<?php

    include("connect.class.php");
    // NEW USER
    $name_user = $_POST['name_user'];
    $rg_user = $_POST['rg_user'];
    $cpf_user = $_POST['cpf_user'];
    $sex_user = $_POST['sex_user'];
    $tel_user = $_POST['tel_user'];
    $cel_user = $_POST['cel_user'];
    $address_user = $_POST['address_user'];
    $number_user = $_POST['number_user'];
    $zipcode_user = $_POST['zipcode_user'];
    $city_user = $_POST['city_user'];
    $state_user = $_POST['state_user'];
    $email_user = $_POST['email_user'];
    $password_user = $_POST['password_user'];
    $btn_new_user = $_POST['btn_new_user'];

    // UPLOAD DE IMG
        $nome_user = $_FILES['photo_user']['name'];
        $temporario_user = $_FILES['photo_user']['tmp_name'];
        $diretorio_user = "imgs/user/".$nome_user;
        move_uploaded_file($temporario_user, $diretorio_user); 

    if(isset($btn_new_user)){
        $insert_new_user = "INSERT INTO user(name_user,rg_user,cpf_user,sex_user,tel_user,cel_user,photo_user,address_user,number_user,zipcode_user,city_user,state_user,email_user,password_user)VALUES('$name_user','$rg_user','$cpf_user','$sex_user','$tel_user','$cel_user','$diretorio_user','$address_user','$number_user','$zipcode_user','$city_user','$state_user','$email_user','$password_user')";
        
        $result_insert_new_user = mysqli_query($connect, $insert_new_user);
        if($result_insert_new_user){
            header("location: account-success.php");
        }else{
            header("location: login.php");
        }
    }
// GET SERVICE
    $get_service = mysqli_query($connect, "SELECT * FROM service");
    $get_service2 = mysqli_query($connect, "SELECT * FROM service");

// GET PLACES
    $get_place = mysqli_query($connect, "SELECT * FROM place");
    $get_place2 = mysqli_query($connect, "SELECT * FROM place");
    $get_place3 = mysqli_query($connect, "SELECT * FROM place");

// GET WISH
    $get_wish = mysqli_query($connect, "SELECT * FROM wish");
    $get_wish2 = mysqli_query($connect, "SELECT * FROM wish");
    $get_wish3 = mysqli_query($connect, "SELECT * FROM wish");
    $get_wish4 = mysqli_query($connect, "SELECT * FROM wish");  
    $get_wish5 = mysqli_query($connect, "SELECT * FROM wish");

//GET LANGUAGE
    $get_language = mysqli_query($connect, "SELECT * FROM language");
    $get_language1 = mysqli_query($connect, "SELECT * FROM language");
    $get_language2 = mysqli_query($connect, "SELECT * FROM language");

// NEW ANNOUNCE
    $name_announce = $_POST['name_announce'];
    $age_announce = $_POST['age_announce'];
    $tel_announce = $_POST['tel_announce'];
    $email_announce = $_POST['email_announce'];
    $city_announce = $_POST['city_announce'];
    $state_announce = $_POST['state_announce'];
    $sex_announce = $_POST['sex_announce'];
    $color_announce = $_POST['color_announce'];
    $service1_announce = $_POST['service1_announce'];
    $service2_announce = $_POST['service2_announce'];
    $place1_announce = $_POST['place1_announce'];
    $place2_announce = $_POST['place2_announce'];
    $place3_announce = $_POST['place3_announce'];
    $wish1_announce = $_POST['wish1_announce'];
    $wish2_announce = $_POST['wish2_announce'];
    $wish3_announce = $_POST['wish3_announce'];
    $wish4_announce = $_POST['wish4_announce'];
    $wish5_announce = $_POST['wish5_announce'];
    $language1_announce = $_POST['language1_announce'];
    $language2_announce = $_POST['language2_announce'];
    $language3_announce = $_POST['language3_announce'];
    $video_announce = $_POST['video_announce'];
    $money1_announce = $_POST['money1_announce'];
    $money2_announce = $_POST['money2_announce'];
    $money3_announce = $_POST['money3_announce'];
    $money4_announce = $_POST['money4_announce'];
    $money5_announce = $_POST['money5_announce'];
    $money6_announce = $_POST['money6_announce'];
    $user_announce = $_POST['user_announce'];
    $type_announce = $_POST['type_announce'];
    $desc_announce = $_POST['desc_announce'];
    $btn_send_announce = $_POST['btn_send_announce'];

    if(isset($btn_send_announce)){
        $errors= array();
        
        foreach($_FILES['photo1_announce']['tmp_name'] as $key1 => $tmp_name1 ){
		$file_name1 = $key.$_FILES['photo1_announce']['name'][$key1];
		$file_size1 =$_FILES['photo1_announce']['size'][$key1];
		$file_tmp1 =$_FILES['photo1_announce']['tmp_name'][$key1];	
        
        $desired_dir1="imgs/announce";
        $dir1 = "$desired_dir1/".$file_name1;
            if(is_dir("$desired_dir1/".$file_name1)==false){
                    move_uploaded_file($file_tmp1,$dir1);
            } // IF 1
        } // FOR EACH 1
        
        foreach($_FILES['photo2_announce']['tmp_name'] as $key2 => $tmp_name2 ){
		$file_name2 = $key.$_FILES['photo2_announce']['name'][$key2];
		$file_size2 =$_FILES['photo2_announce']['size'][$key2];
		$file_tmp2 =$_FILES['photo2_announce']['tmp_name'][$key2];	
        
        $desired_dir2="imgs/announce";
        $dir2 = "$desired_dir2/".$file_name2;
            if(is_dir("$desired_dir2/".$file_name2)==false){
                    move_uploaded_file($file_tmp2,$dir2);
            } // IF 2
        } // FOR EACH 2
        
        foreach($_FILES['photo3_announce']['tmp_name'] as $key3 => $tmp_name3 ){
		$file_name3 = $key.$_FILES['photo3_announce']['name'][$key3];
		$file_size3 =$_FILES['photo3_announce']['size'][$key3];
		$file_tmp3 =$_FILES['photo3_announce']['tmp_name'][$key3];	
        
        $desired_dir3="imgs/announce";
        $dir3 = "$desired_dir3/".$file_name3;
            if(is_dir("$desired_dir3/".$file_name3)==false){
                    move_uploaded_file($file_tmp3,$dir3);
            } // IF 3
        } // FOR EACH 3
        
        foreach($_FILES['photo4_announce']['tmp_name'] as $key4 => $tmp_name4 ){
		$file_name4 = $key.$_FILES['photo4_announce']['name'][$key4];
		$file_size4 =$_FILES['photo4_announce']['size'][$key4];
		$file_tmp4 =$_FILES['photo4_announce']['tmp_name'][$key4];	
        
        $desired_dir4="imgs/announce";
        $dir4 = "$desired_dir4/".$file_name4;
            if(is_dir("$desired_dir4/".$file_name4)==false){
                    move_uploaded_file($file_tmp4,$dir4);
            } // IF 4
        } // FOR EACH 4
        
        foreach($_FILES['photo5_announce']['tmp_name'] as $key5 => $tmp_name5 ){
		$file_name5 = $key.$_FILES['photo5_announce']['name'][$key5];
		$file_size5 =$_FILES['photo5_announce']['size'][$key5];
		$file_tmp5 =$_FILES['photo5_announce']['tmp_name'][$key5];	
        
        $desired_dir5="imgs/announce";
        $dir5 = "$desired_dir5/".$file_name5;
            if(is_dir("$desired_dir5/".$file_name5)==false){
                    move_uploaded_file($file_tmp5,$dir5);
            } // IF 5
        } // FOR EACH 5
        
        foreach($_FILES['photo6_announce']['tmp_name'] as $key6 => $tmp_name6 ){
		$file_name6 = $key.$_FILES['photo6_announce']['name'][$key6];
		$file_size6 =$_FILES['photo6_announce']['size'][$key6];
		$file_tmp6 =$_FILES['photo6_announce']['tmp_name'][$key6];	
        
        $desired_dir6="imgs/announce";
        $dir6 = "$desired_dir6/".$file_name6;
            if(is_dir("$desired_dir6/".$file_name6)==false){
                    move_uploaded_file($file_tmp6,$dir6);
            } // IF 6
        } // FOR EACH 6
        
        foreach($_FILES['photo7_announce']['tmp_name'] as $key7 => $tmp_name7 ){
		$file_name7 = $key.$_FILES['photo7_announce']['name'][$key7];
		$file_size7 =$_FILES['photo7_announce']['size'][$key7];
		$file_tmp7 =$_FILES['photo7_announce']['tmp_name'][$key7];	
        
        $desired_dir7="imgs/announce";
        $dir7 = "$desired_dir7/".$file_name7;
            if(is_dir("$desired_dir7/".$file_name7)==false){
                    move_uploaded_file($file_tmp7,$dir7);
            } // IF 7
        } // FOR EACH 7
        
        foreach($_FILES['photo8_announce']['tmp_name'] as $key8 => $tmp_name8 ){
		$file_name8 = $key.$_FILES['photo8_announce']['name'][$key8];
		$file_size8 =$_FILES['photo8_announce']['size'][$key8];
		$file_tmp8 =$_FILES['photo8_announce']['tmp_name'][$key8];	
        
        $desired_dir8="imgs/announce";
        $dir8 = "$desired_dir8/".$file_name8;
            if(is_dir("$desired_dir8/".$file_name8)==false){
                    move_uploaded_file($file_tmp8,$dir8);
            } // IF 8
        } // FOR EACH 8
        
        foreach($_FILES['photo9_announce']['tmp_name'] as $key9 => $tmp_name9 ){
		$file_name9 = $key.$_FILES['photo9_announce']['name'][$key9];
		$file_size9 =$_FILES['photo9_announce']['size'][$key9];
		$file_tmp9 =$_FILES['photo9_announce']['tmp_name'][$key9];	
        
        $desired_dir9="imgs/announce";
        $dir9 = "$desired_dir9/".$file_name9;
            if(is_dir("$desired_dir9/".$file_name9)==false){
                    move_uploaded_file($file_tmp9,$dir9);
            } // IF 9
        } // FOR EACH 9
        
        foreach($_FILES['photo10_announce']['tmp_name'] as $key10 => $tmp_name10 ){
		$file_name10 = $key.$_FILES['photo10_announce']['name'][$key10];
		$file_size10 =$_FILES['photo10_announce']['size'][$key10];
		$file_tmp10 =$_FILES['photo10_announce']['tmp_name'][$key10];	
        
        $desired_dir10="imgs/announce";
        $dir10 = "$desired_dir10/".$file_name10;
            if(is_dir("$desired_dir10/".$file_name10)==false){
                    move_uploaded_file($file_tmp10,$dir10);
            } // IF 10
        } // FOR EACH 10
        
        $new_announce = mysqli_query($connect, "INSERT INTO announce(name_announce,age_announce,tel_announce,email_announce,city_announce,state_announce,sex_announce,color_announce,service1_announce,service2_announce,place1_announce,place2_announce,place3_announce,wish1_announce,wish2_announce,wish3_announce,wish4_announce,wish5_announce,language1_announce,language2_announce,language3_announce,photo1_announce,photo2_announce,photo3_announce,photo4_announce,photo5_announce,photo6_announce,photo7_announce,photo8_announce,photo9_announce,photo10_announce,video_announce,money1_announce,money2_announce,money3_announce,money4_announce,money5_announce,money6_announce,user_announce,type_announce,desc_announce)VALUES('$name_announce','$age_announce','$tel_announce','$email_announce','$city_announce','$state_announce','$sex_announce','$color_announce','$service1_announce','$service2_announce','$place1_announce','$place2_announce','$place3_announce','$wish1_announce','$wish2_announce','$wish3_announce','$wish4_announce','$wish5_announce','$language1_announce','$language2_announce','$language3_announce','$dir1','$dir2','$dir3','$dir4','$dir5','$dir6','$dir7','$dir8','$dir9','$dir10','$video_announce','$money1_announce','$money2_announce','$money3_announce','$money4_announce','$money5_announce','$money6_announce','$user_announce','$type_announce','$desc_announce')");
        
        if($new_announce){header("location: announce-success.php");}
    }
// GET ANNOUNCE
    //$get_announce_premium = mysqli_query($connect, "SELECT * FROM announce WHERE ban_announce = '0' AND type_announce = '1' ORDER BY id_announce DESC");
    $get_announce = mysqli_query($connect, "SELECT * FROM announce WHERE ban_announce = '0' ORDER BY type_announce DESC");
    $id_url_announce = $_GET['announce'];
    $get_url_announce = mysqli_query($connect, "SELECT * FROM announce WHERE id_announce = '$id_url_announce' ORDER BY type_announce ASC");

    $list_get_url_announce = mysqli_fetch_array($get_url_announce);

// GET USER PROFILE
    $id_user = $_GET['profile'];
    $get_user_profile = mysqli_query($connect, "SELECT * FROM user WHERE id_user = '$id_user'");
    $list_get_user_profile = mysqli_fetch_array($get_user_profile);

// EDIT USER PROFILE
    $name_edit_user = $_POST['name_user'];
    $rg_edit_user = $_POST['rg_user'];
    $cpf_edit_user = $_POST['cpf_user'];
    $sex_edit_user = $_POST['sex_user'];
    $tel_edit_user = $_POST['tel_user'];
    $cel_edit_user = $_POST['cel_user'];
    $address_edit_user = $_POST['address_user'];
    $number_edit_user = $_POST['number_user'];
    $zipcode_edit_user = $_POST['zipcode_user'];
    $city_edit_user = $_POST['city_user'];
    $state_edit_user = $_POST['state_user'];
    $email_edit_user = $_POST['email_user'];
    $password_edit_user = $_POST['password_user'];
    $btn_edit_user = $_POST['btn_edit_user'];

    

    if(isset($btn_edit_user)){
        // UPLOAD DE IMG
        $nome_edit_user = $_FILES['photo_user']['name'];
        $temporario_edit_user = $_FILES['photo_user']['tmp_name'];
        $diretorio_edit_user = "imgs/user/".$nome_edit_user;
        move_uploaded_file($temporario_edit_user, $diretorio_edit_user); 
        
        $edit_user = mysqli_query($connect, "UPDATE user SET name_user='$name_edit_user', rg_user='$rg_edit_user', cpf_user='$cpf_edit_user', sex_user='$sex_edit_user', tel_user='$tel_edit_user', cel_user='$cel_edit_user', photo_user='$diretorio_edit_user', address_user='$address_edit_user', number_user='$number_edit_user', zipcode_user='$zipcode_edit_user', city_user='$city_edit_user', state_user='$state_edit_user', email_user='$email_edit_user', password_user='$password_edit_user' WHERE id_user='$id_user'");
        
        if($edit_user){header("location: edit-user-success.php");}
    }
// TURN VIP USER
    $get_no_vip_user = mysqli_query($connect, "SELECT * FROM user WHERE type_user = 0");
    
    $id_no_vip_user = $_GET['user'];
    $get_new_vip_user = mysqli_query($connect, "SELECT * FROM user WHERE id_user= '$id_no_vip_user'");
    $list_new_vip_user = mysqli_fetch_array($get_new_vip_user);

    $btn_new_vip = $_POST['btn_new_vip'];
    if(isset($btn_new_vip)){
        $new_vip_user = mysqli_query($connect, "UPDATE user SET type_user = '1' WHERE id_user = '$id_no_vip_user'");
        if($new_vip_user){header("location: new-vip-success.php");}
    }
// GET ALL USERS
    $get_all_users_limited = mysqli_query($connect, "SELECT * FROM user WHERE ban_user = '0' ORDER BY id_user DESC LIMIT 5");
    $get_all_users = mysqli_query($connect, "SELECT * FROM user WHERE ban_user = '0' ORDER BY id_user DESC");
// GET ALL ANNOUNCE
    $get_all_announce_limited = mysqli_query($connect, "SELECT * FROM announce ORDER BY id_announce DESC LIMIT 5");
    $get_all_announce = mysqli_query($connect, "SELECT * FROM announce WHERE ban_announce = '0' ORDER BY id_announce DESC");
// COUNT USERS
    $get_users_count = mysqli_query($connect, "SELECT * FROM user");
    $count_users = mysqli_num_rows($get_users_count);
// COUNT ANNOUNCE 
    $count_announce = mysqli_num_rows($get_announce);
// GET USERS INFO   
    $user_id = $_GET['user_id'];
    $get_user_info = mysqli_query($connect, "SELECT * FROM user WHERE id_user = '$user_id'");
    $list_get_user_info = mysqli_fetch_array($get_user_info);

// BAN USERS
    $btn_ban_user = $_POST['btn_ban_user'];
        if(isset($btn_ban_user)){
        $ban_users = mysqli_query($connect, "UPDATE user SET ban_user = '1' WHERE id_user = '$user_id'");
        if($ban_users){header("location: ban-user-success.php");}
    }

// GET ANNOUNCE INFO
    $announce_id = $_GET['announce_id'];
    $get_announce_info = mysqli_query($connect, "SELECT * FROM announce WHERE id_announce = '$announce_id'");
    $list_get_announce_info = mysqli_fetch_array($get_announce_info);

// DELETE ANNOUNCE
    $btn_delete_announce = $_POST['btn_delete_announce'];
        if(isset($btn_delete_announce)){
        $delete_announce = mysqli_query($connect, "UPDATE announce SET ban_announce = '1' WHERE id_announce = '$announce_id'");
        if($delete_announce){header("location: delete-announce-success.php");}
    }

// DESKTOP SEARCH
    $name_search = $_GET['name_announce'];
    $minage_search = 18;
    $maxage_search = $_GET['age_announce'];
    $sex_search = $_GET['sex_announce'];
    $color_search = $_GET['color_announce'];
    $minmoney_search = $_GET['money2_announce'];
    $wish_search = $_GET['wish1_announce'];
    $state_search = $_GET['state_announce'];
    $city_search = $_GET['city_announce'];
    $btn_search = $_GET['btn_search'];
    
    if(isset($btn_search)){        
        $get_search = mysqli_query($connect, "SELECT * FROM `announce` WHERE `name_announce` LIKE '$name_search%'");
        $count_search = mysqli_num_rows($get_search);
    }

// ADV SEARCH
    $name_adv_search = $_GET['name_announce'];
    $minage_adv_search = 18;
    $maxage_adv_search = $_GET['age_announce'];
    $sex_adv_search = $_GET['sex_announce'];
    $color_adv_search = $_GET['color_announce'];
    $minmoney_adv_search = $_GET['money2_announce'];
    $wish_adv_search = $_GET['wish1_announce'];
    $state_adv_search = $_GET['state_announce'];
    $city_adv_search = $_GET['city_announce'];
    $btn_adv_search = $_GET['btn_adv_search'];
    
    if(isset($btn_adv_search)){
        $get_adv_search = mysqli_query($connect, "SELECT * FROM `announce` WHERE `name_announce` LIKE '$name_adv_search%'");
        $count_adv_search = mysqli_num_rows($get_adv_search);
    }

// SEARCH FOOTER
    $wish_footer = $_GET['wish'];
    $get_search_footer = mysqli_query($connect, "SELECT * FROM announce WHERE wish1_announce = '$wish_footer' OR wish2_announce = '$wish_footer' OR wish3_announce = '$wish_footer' OR wish4_announce = '$wish_footer' OR wish5_announce = '$wish_footer'");    

// GET SUBSCRIBERS
    $get_subscribers = mysqli_query($connect, "SELECT * FROM newsletter ORDER BY id_newsletter DESC");
// GET BAN USERS
    $get_ban_users = mysqli_query($connect, "SELECT * FROM user WHERE ban_user = '1'");

// ON USERS
    $ban_users_url = $_GET['ban_user_id'];
    $get_ban_users_url = mysqli_query($connect, "SELECT * FROM user WHERE id_user = '$ban_users_url'");
    $list_ban_users_url = mysqli_fetch_array($get_ban_users_url);
    $on_user_btn = $_POST['on_user_btn'];
    if(isset($on_user_btn)){
        $off_ban_users = mysqli_query($connect, "UPDATE user SET ban_user = '0' WHERE id_user = '$ban_users_url'");
        if($off_ban_users){header("location: off-ban-user-success.php");}
    }
    
?>