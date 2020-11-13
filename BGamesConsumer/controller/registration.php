<?php
    if($_POST!=NULL){
        include("../model/connection.php");
        include("../model/user.php");
        $conn=new connection();
        $pdo=$conn->connect_db();
        $user1=new user();
        $user1->get_information($_POST['uname'],$_POST['email'],$_POST['pswd']);
        $user1->create_record($pdo);
        header("Location: ../view/login.php");
    }
?>


 