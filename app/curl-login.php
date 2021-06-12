<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.ipb.ac.id/v1/Authentication/LoginMahasiswa',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "Username": "fachirah_ama",
    "Password": "s3mangatemil"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'X-IPBAPI-TOKEN: Bearer 8860fee7-3791-36d8-8736-e2e190f97f57'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>