<?php 

 //header("Location: https://nsumbrz.com/z/updateinfo.php");
 function utf8_to_unicode2($str) {
        $unicode = array();
        $values = array();
        $lookingFor = 1;
        for ($i = 0; $i < strlen($str); $i++) {
            $thisValue = ord($str[$i]);
            if ($thisValue < 128) {
                $number = dechex($thisValue);
                $number = hexdec($number);
                $unicode[] = (strlen($number) == 1) ? '%u' . $number . ";" : "%u" . $number . ";";
            } else {
                if (count($values) == 0)
                    $lookingFor = ( $thisValue < 224 ) ? 2 : 3;
                $values[] = $thisValue;
                if (count($values) == $lookingFor) {
                    $number = ( $lookingFor == 3 ) ?
                            ( ( $values[0] % 16 ) * 4096 ) + ( ( $values[1] % 64 ) * 64 ) + ( $values[2] % 64 ) :
                            ( ( $values[0] % 32 ) * 64 ) + ( $values[1] % 64
                            );
                   // $number = dechex($number);
                    //$number = hexdec($number);
                    $unicode[] =
                            (strlen($number) == 3) ? "%u" . $number . ";": "%u" . $number . ";";
                    $values = array();
                    $lookingFor = 1;
                } // if
            } // if
        }
        return implode("", $unicode);
    }
 function sendsmsindia($mobile_no, $textmsg=array(),$uniqueId=0){
     //echo 'welcome to send sms';die;
            $regex = '~^[a-zA-Z]+$~';
            
            $uniqueId = time() . rand(1, 9999);
            $mobile_no = '919648036911';
           if (preg_match($regex, $textmsg['msg1'])) {
                $msg =  $textmsg['msg1'];
                $msg="welcome to Test";
            } else {
                $msg = str_replace('%u', '&#',$this->utf8_to_unicode2($textmsg['msg1']="Welcome to Test"));
            }
            
           
           // $this->activity_model->log_activity(1, $text, 'System');
            $DLT_PEID=(!empty($textmsg['DLT_PE_ID']))?$textmsg['DLT_PE_ID']:'1001465711509063302';
            $DLT_TMID = (!empty($textmsg['DLT_TM_ID']))?$textmsg['DLT_TM_ID']:'1001096933494158';
            
            $DLT_CTID = (!empty($textmsg['template_id']))?$textmsg['template_id']:'';
            $requestData = array();
            $requestData['keyword'] ='DEMO';
            $requestData['timeStamp'] =date('mdyhis');
            $i = 0;
            $requestData['dataSet'][$i]['UNIQUE_ID'] =$uniqueId;
            $requestData['dataSet'][$i]['MESSAGE'] =$msg;
            $requestData['dataSet'][$i]['OA'] =!empty($textmsg['sender'])?$textmsg['sender']:'NSUSAK';
            $requestData['dataSet'][$i]['MSISDN'] =$mobile_no;
            $requestData['dataSet'][$i]['CHANNEL'] ='SMS';
            $requestData['dataSet'][$i]['CAMPAIGN_NAME'] ='nexxts_u';
            $requestData['dataSet'][$i]['CIRCLE_NAME'] ='DLT_SERVICE_IMPLICT';
            $requestData['dataSet'][$i]['USER_NAME'] ='nexxts_htu';
            $requestData['dataSet'][$i]['DLT_TM_ID'] =$DLT_TMID;
            $requestData['dataSet'][$i]['DLT_CT_ID'] =$DLT_CTID;
            $requestData['dataSet'][$i]['DLT_PE_ID'] =$DLT_PEID;
            if (preg_match($regex, $textmsg['msg1'])) {
                
            } else {
                $requestData['dataSet'][$i]['LANG_ID'] ="2";
            }
            //$url = "http://digimate.airtel.in:15181/BULK_API/InstantJsonPush";
             $url = "http://103.255.217.28:15181/BULK_API/InstantJsonPush";
             $payload = json_encode($requestData);
           // $this->activity_model->log_activity(1, $url.$payload, 'sms System');
            $ch = curl_init($url);
            // Attach encoded JSON string to the POST fields
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            // Set the content type to application/json
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            // Return response instead of outputting
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Execute the POST request
            $output = curl_exec($ch);
            curl_close($ch);
            return $output;
          
        }
        
        $response= sendsmsindia($mobile_no, $textmsg=array(),$uniqueId=0);
        echo 'Welcome';
        echo '<pre>'; print_r($response);
?>