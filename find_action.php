<?php  
require_once('constants_curl.php');
$name= $_POST['name'];
$email= $_POST['email'];
$mobile_no= $_POST['mobile_no'];
$state= $_POST['state'];
$city= $_POST['city'];
$pincode= $_POST['pincode'];
$address1= $_POST['address1'];
$address2= $_POST['address2'];
$qr_code= $_POST['qr_code'];
$message= $_POST['message_owner'];
if(empty($qr_code)){
    $qr_code='abc';
}
function Send_request_server2($url,$headers,$method,$data=array())
        {
            
       // if($this->_isCurl()){
            if($method==0){
                $method ='GET';
            }else{
                $method='POST';
            }
        $curl = curl_init();  
        
     
       curl_setopt_array($curl, array(
                          CURLOPT_URL => $url,
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_POSTFIELDS=>json_encode($data),
                          CURLOPT_POST=>0,
                          CURLOPT_CUSTOMREQUEST => $method,
                          CURLOPT_HTTPHEADER => $headers,
                        ));
                    $response = curl_exec($curl);
                        
                        if($response === false)
                        {
                            echo 'Curl error: ' . curl_errno($curl);
                        }
                       
                    curl_close($curl);
    
        /*}else{
            $response = file_get_contents($url);
        }*/
        
    return $response;
        }

if( isset($_REQUEST['mobile_no'])){

$headers = array(
    'Content-type: application/json'
);
 
   //echo  $url = sprintf("%s?%s", $baseurl, http_build_query($data));
   //echo $url = "http://nsumbrz.com/public/admin/journey/api/found_something?KEY=APIKEY1234&brand_id=1&qr_code=GX6B3X69029&mobile_no=9648036911&name=Devendra&email_id=devcodescript@gmail.com&pincode=224227&state=1&city=1&address1=test &address2=test2&message=found in delhi";
    $url = "https://nsumbrz.com/public/admin/journey/api/new_registration?KEY=APIKEY1234&brand_id=1&qr_code=$qr_code&mobile_no=$mobile_no&name=".urlencode($name)."&email_id=$email&pincode=$pincode&state=$state&city=$city&address1=".urlencode($address1)."&address2=".urlencode($address2)."&message=".urlencode($message);
  $response= Send_request_server2($url,$headers,0,$data=array());
$result=json_decode($response);

  
  $result=json_decode($response);
  
    if(!empty($result)){
      $status= $result->status;
     $message=$result->msg; 
       if($status=1){
           echo 'Thanks For Update Us You Have Found Something. Authorised Person will Contact Soon';
           header("Location: https://nsumbrz.com/z/success.php");
            exit();
       }else{
           echo 'Please Try Again For Update Us You Have Found Something.';
          // echo 'error page call';
          header("Location: https://nsumbrz.com/z/error.php");
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
    //exit();
}//endif..
?>