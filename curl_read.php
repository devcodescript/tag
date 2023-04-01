<?php
$url = 'http://nsumbrz.com/public/admin/journey/api/new_registration?KEY=APIKEY1234&brand_id=1&qr_code=GX6B3X69029&mobile_no=9648036911&name=Devendra&email_id=devcodescript@gmail.com&pincode=224227&state=1&city=1&address1=test &address2=test2';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);
echo $data;
echo '<pre>'; print_r($data);

// create & initialize a curl session
echo 'welcome'; die;
$curl = curl_init();

// set our url with curl_setopt()
curl_setopt($curl, CURLOPT_URL, "http://nsumbrz.com/public/admin/journey/api/new_registration?KEY=APIKEY1234&brand_id=1&qr_code=GX6B3X69029&mobile_no=9648036911&name=Devendra&email_id=devcodescript@gmail.com&pincode=224227&state=1&city=1&address1=test &address2=test2");

// return the transfer as a string, also with setopt()
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// curl_exec() executes the started curl session
// $output contains the output string
$output = curl_exec($curl);
echo $output;

// close curl resource to free up system resources
// (deletes the variable made by curl_init)
curl_close($curl);
?>