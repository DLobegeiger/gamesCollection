<?php
    header("Content-Type: application/json; charset=UTF-8");
    $obj = json_decode($_POST['parameters'], false);

    include "../model/connection.php";
    include "../model/games.php";

    $pdo=connection::getPdo();
    $result=games::userCollection($pdo,$obj->userid);
    echo json_encode($result);
    //echo json_last_error();
   /*  if(!empty($result)||isset($result)){
        echo json_encode($result);
    }else{echo json_encode("empty");} */
    
    

    
?>