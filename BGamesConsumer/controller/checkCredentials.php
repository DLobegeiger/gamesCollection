<?php
include("../model/connection.php");
include("../model/security.php");
$conn=new connection();
$pdo=$conn->connect_db();
$secure=new security();
extract($_POST);
$secure->loginCheck($pdo,$uname,$password);
?>