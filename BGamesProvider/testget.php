<?php

$cURLConnection = curl_init();
 $getParameter= array(
    'game_title' => 'TEST'
   );
$getParameter=json_encode($getParameter);
curl_setopt($cURLConnection, CURLOPT_URL, 'http://http://localhost/BGamesProvider/controller/searchgame.php?x='.$getParameter);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse = json_decode($result);
print_r($jsonArrayResponse);
?>