<?php  
require_once('constants_curl.php');
$qr_code= $_GET['y'];
if(isset($_GET['y']) || isset($_REQUEST['y'])){
    $qr_code = (isset($_REQUEST['y'])?$_REQUEST['y']:'');
    $data = array(
        'KEY' => 'APIKEY1234',
        'brand_id' =>BRAND_ID,
        'qr_code' => $qr_code,
    );
    $baseurl = BASE_API.'journey/api/check_qr_code';
   // $res = CallAPI('GET', $baseurl, $Data);
    //echo 'welcome'; print_r($res); die;
    $headers = array(
    'Content-type: application/x-www-form-urlencoded'
);
   echo  $url = sprintf("%s?%s", $baseurl, http_build_query($data));
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://nsumbrz.com/public/admin/journey/api/check_qr_code?KEY=APIKEY1234&brand_id=1&qr_code=$qr_code",
 // CURLOPT_URL =>$url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  
));
$response = curl_exec($curl);
$result=json_decode($response);
$err = curl_error($curl);
curl_close($curl);
/*if ($err) {
  echo "cURL Error #:" . $err;
} else {*/
  echo $response.'<br>';
  $result=json_decode($response);
  print_r($result);
    if(!empty($result)){
      echo 'status is'.$status= $result->status;
      echo'<br>'.'message is '.$message=$result->msg; 
       if($status==1){
           //echo 'success page called';
           header("Location: http://nsumbrz.com/z/registration.php");
           //header("Location: http://www.yourwebsite.com/user.php"); 
            exit();
          
       }else{
           echo 'error page call';
         // header("Location: https://nsumbrz.com/z/error.php"); 
          exit();
       }
    }
  
//}
/*$result=json_decode($response);
  echo '<pre>'; print_r($response) ;
  echo '<pre>'; print_r($result) ;
  echo $status= $result->status;
       $message=$result->msg;
  die;*/ 
}else{
    header("Location: https://nsumbrz.com/z/error.php"); /* Redirect browser */
    //echo 'Please check scan QR code';
    exit();
}//endif..
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Select Choise</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 200px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>

<div class="container">
  <!--<h2>Select Your Choise</h2>-->
  <form class="form-horizontal" action="/action_page.php">
      <div class="row">
    <!--<div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>-->
    <div class="col-sm-4" ></div>
    <div class="col-sm-4" >
        <h2>Select Your Choise</h2>
        
        <a href="http://nsumbrz.com/z/registration.php" class="button">New Registration</a>
        <a href="http://nsumbrz.com/z/updateinfo.php" class="button">Update Journey</a>
         <a href="http://nsumbrz.com/z/found.php" class="button">Found Something ?</a>
    </div>
   
   
  </form>
</div>

</body>
</html>
