<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://192.168.2.151/AIMWebService/api/Accounts?AppID=RESTExamples&Safe=T-APP-CYBR-RESTAPI&Folder=Root&Object=Database-MicrosoftSQLServer-JG-sql01.joe-garcia.local-Svc_BambooHR",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 3c378df1-c2e9-a66f-fd10-141fbf6a3bd8"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>