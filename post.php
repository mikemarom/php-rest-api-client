<?php
// Initialize cURL session
$curl_connection=curl_init();

// Set up endpoint
curl_setopt($curl_connection,CURLOPT_URL, 'https://api.zippopotam.us/us/94960');

// Return the response of the cURL command as a string
curl_setopt($curl_connection,CURLOPT_RETURNTRANSFER, true);


// Populate the POST request fields
$postRequest = array(
    'firstFieldData' => 'foo',
    'secondFieldData' => 'bar'
);
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);


// Execute the cURL call
$response = curl_exec($curl_connection);

// Close the cURL connection
curl_close($curl_connection);

echo '<p>Response String is: '.$response.'</p>';

// Parse the JSON string response into an array
$jsonArrayResponse = json_decode($response);

echo '<p>Response Array is: <br><pre>';
echo var_dump($jsonArrayResponse);
echo '</pre></p>';

?>