<?php
    header("Content-Type: application/json; charset=UTF-8");
    $obj = json_decode($_POST['parameters'], false);

    include "../model/connection.php";
    include "../model/games.php";

    //$conn=new connection();
    //$pdo=$conn->connect_db();
    //$games=new games();
    //$result=$games->searchgames($pdo,$obj->game_title);
    $pdo=connection::getPdo();
    $result=games::searchgames($pdo,$obj->game_title);

    if(empty($result)){$result="empty";}
    //echo "<pre>";
// print_r($result);
 //echo "<\pre>";
    echo json_encode($result);


?>