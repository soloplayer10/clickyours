<?php
	$api_key = "726be259";
	$secret = "GzvxwYe1oBcopHji";
	
	$sender  = "ClickYours";
	$message = "Appointment booked Successfully";
	$to = "639359960063";
	
	
	$ch = curl_init();
	
	
	$data = array(
		"from" => $sender,
		"text" => $message,		
		"to" => $to,	
		"api_key" => $api_key,
		"api_secret" => $secret
	);
	curl_setopt($ch, CURLOPT_URL, 'https://rest.vonage.com/sms/json');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($data));
	
	$headers = array();
	$headers[] = 'Content-Type: application/x-www-form-urlencoded';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	
	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	curl_close($ch);
?>

