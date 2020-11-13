<?php
    header("Content-Type: application/json; charset=UTF-8");
    $obj = json_decode($_POST['parameters'], false);

    include "../model/connection.php";
    include "../model/games.php";

    $pdo=connection::getPdo();
    $result=games::removeCollection($pdo, $obj->userid, $obj->gameid);

    // if(empty($result)){$result="empty";}

    echo json_encode($result);

?>