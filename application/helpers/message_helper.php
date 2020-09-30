<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
    function send_text($sendto, $msg="") {
       
        // Account details
        $apiKey = urlencode('R/BpgYyTlqw-0hG1pvGfyXxgKTgdRH7SoBf3wMamNC');
        
        $sendto= str_replace(' ', '', $sendto);
        $sendto= ltrim($sendto,"+44");

        $areacode= "44";
        // Message details

        $sender = urlencode('60777');
        $numbers = array(trim($areacode.$sendto));
        $message = rawurlencode($msg);

        $numbers = implode(',', $numbers);

    
        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers,"sender" => $sender,  "message" => $message);
    
        // Send the POST request with cURL
        $ch = curl_init('https://api.txtlocal.com/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        // Process your response here
        // echo $response;

    }

?>