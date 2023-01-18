<?php
define('BRAND_ID','1');
define('BASE_API','http://nsusmbrz.com/public/admin/');
define('BRAND_NAME','');
define('API_BASE_URL',BASE_API.'webauth/api/');
define('COPYRIGHT','Copyright &copy; '.BRAND_NAME.' '.date('Y'));
define('BRAND_LOGO','images/sakarni_logo.png');
define('TAG_LINE','');
define('TAG_LINE_DISPLAY',false);
define('RIGHT_IMG','wallputty_logo.png');
define('IMG_WIDTH','500');
define('IMG_HEIGHT','400');
define('API_KEY','APIKEY1234');
define('SAKARNI_CARD_IMAGE','images/sakarni_card.png');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function CallAPI($method, $url, $data = false)
{
    
    echo 'welcome to '.$method.' url is '.$url;
    echo '<pre>'; print_r($data); //die;
    $curl = curl_init();
$headers = array(
    'Content-type: application/x-www-form-urlencoded'
    
);


   switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query($data));
                
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
     echo $url;
    // Optional Authentication:
    //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
	/*if(curl_exec($curl) === false)
	{
	    echo 'Curl error: ' . curl_error($curl);
	}
	else
	{*/
	    $result = curl_exec($curl);
	//}

    curl_close($curl);

    //return $result;
    
    echo '<pre>'; print_r($result); die;
}//end funciton..
?>