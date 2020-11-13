<?php
//curl_init();       initializes a cURL session
//curl_setopt();     changes the cURL session behavior with options
//curl_exec();       executes the started cURL session
//curl_close();      closes the cURL session and deletes the variable made by curl_init();

$postRequest = array(
    'game_title' => 'Forza Horizon 4',
);

$postRequest=json_encode($postRequest);
$cURLConnection = curl_init('http://localhost/BGamesProvider/controller/searchgame.php');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

// $apiResponse - available data from the API request
$jsonArrayResponse =json_decode($apiResponse);
print_r($jsonArrayResponse);

?>