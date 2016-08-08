<?php 
// Replace with real BROWSER API key from Google APIs
$apiKey = "AIzaSyBBziv2dYAqWDjEV-56WTteiNUlIkZCPFQ";

// Replace with real client registration IDs 
$registrationIDs = array( "c6BA8K3F4qw:APA91bE_Su9PP5MV2eHuSym…4vI8zVK_idanIp-MmNzcQxjYWlGjaKFM86WpUWdUUCA9mzrDGbTiXhYGhrHQvoUYl9ykTh3V-k" );

// Message to be sent
$message = "xsss";

// Set POST variables
$url = 'https://android.googleapis.com/gcm/send';

$fields = array(
                'registration_ids'  => $registrationIDs,
                'data'              => array( "message" => $message ),
                );

$headers = array( 
                    'Authorization: key=' . $apiKey,
                    'Content-Type: application/json'
                );

// Open connection
$ch = curl_init();

// Set the url, number of POST vars, POST data
curl_setopt( $ch, CURLOPT_URL, $url );

curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

// Execute post
$result = curl_exec($ch);

// Close connection
curl_close($ch);

echo $result;
 ?>