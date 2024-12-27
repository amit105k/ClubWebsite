<?php
    	$apiKey = urlencode('NzE2YjdhNTA3NTcxNTM2NDU5NzczMzRmNzA3YTQ2MzY');
    	
    	$numbers =${'mobile'};
    	$sender = urlencode('Noida Clubs');
    	$message = rawurlencode('Booking is confirm for club ${club}
                                        ');
     
    	$numbers = implode(',', $numbers);
     
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	$ch = curl_init('https://api.textlocal.in/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);
    	
    	echo $response;
    ?>