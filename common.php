<?php

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
?>