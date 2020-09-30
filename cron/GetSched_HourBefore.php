<?php

    date_default_timezone_set('Europe/London');

    $conn  = new mysqli("localhost","root","","imperial_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $timenow= date('Y-m-d H:m:s');
   
    //SQL get Schedule and details an hour before
    $sql = "SELECT a.appointment_id,a.`schedule`,TIMESTAMPDIFF(HOUR,'". $timenow ."',`schedule`)  AS TIME,
            l.first_name lead_fname,l.last_name lead_lname,l.phone, u.first_name SWA_fname, u.last_name SWA_lname
            FROM appointment a LEFT JOIN lead l ON l.lead_id= a.lead_id 
            LEFT JOIN user u ON u.user_id= a.user_id WHERE TIMESTAMPDIFF(HOUR,'". $timenow ."',`schedule`)  <= 1
            AND TIMESTAMPDIFF(HOUR,'". $timenow ."',`schedule`)  >= 0
            AND a.Istext= '0' AND a.`status` = '1'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        // output data of each row
        while($row = $result->fetch_assoc()) {
       
                $SWAname =$row["SWA_fname"] ." " . $row["SWA_lname"];
                $appointmenttime= date('H:m',strtotime($row["schedule"]));
                $name= $row["lead_fname"] ." " . $row["lead_lname"];
                $appID= $row["appointment_id"];
                $sendto = $row["phone"];
              
                $msg= "Hi $name,

This is a friendly reminder of your upcoming appointment with $SWAname on $appointmenttime. If you want to reschedule please reply RESCHEDULE <dd>/<mm>/<yyyyy> <HH>:<mm>.

Example: RESCHEDULE 25/08/2020 15:30";

                // format mobile number
               

                if (!empty($sendto)) 
                {
                    
                    // Account details
                    $apiKey = urlencode('R/BpgYyTlqw-0hG1pvGfyXxgKTgdRH7SoBf3wMamNC');
                    
                    $sendto= str_replace(' ', '', $sendto);
                    $sendto= ltrim($sendto,"+44");
                    
                    // Message details
                    $areacode= "44";
                    $numbers = array(trim($areacode.$sendto));

                    $sender = urlencode('IMPERIAL');
                    $message = rawurlencode($msg);

                    $numbers = implode(',', $numbers);
                
                    // Prepare data for POST request
                    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
                
                    // Send the POST request with cURL
                    $ch = curl_init('https://api.txtlocal.com/send/');
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    curl_close($ch);
                }

               // Update Istext- 1
                $sqls = "Update appointment set Istext= '1' WHERE appointment_id = '". $appID ."'";
                $conn->query($sqls);

        }

        

    } 
    else 
    {
        echo "0 results";
    }

    $conn->close();

?>