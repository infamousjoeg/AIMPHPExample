<?php

$request = new HttpRequest();
$request->setUrl('https://components.joe-garcia.local/AIMWebService/api/Accounts');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData(array(
  'AppID' => 'RESTExamples',
  'Safe' => 'T-APP-CYBR-RESTAPI',
  'Folder' => 'Root',
  'Object' => 'Database-MicrosoftSQLServer-JG-sql01.joe-garcia.local-Svc_BambooHR'
));

$request->setHeaders(array(
  'postman-token' => '31c53b65-fa46-521b-faef-d5b356211bc4',
  'cache-control' => 'no-cache',
  'content-type' => 'application/json'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

?>