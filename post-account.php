<?php
// Initialize cURL session
$curl_connection=curl_init();

// Set up endpoint
curl_setopt($curl_connection,CURLOPT_URL, 'https://marom.dev/php-rest-api-server/account/');

// Return the response of the cURL command as a string
curl_setopt($curl_connection,CURLOPT_RETURNTRANSFER, true);


// Populate the POST request fields
$postRequest = array(
    'name' => 'Jane Smith',
    'street_address' => '345 Market Street',
	'city' => 'San Francisco',
	'state' => 'CA',
	'country' => 'USA',
	'zipcode' => '94104',
	'email' => 'janes@gmail.com',
	'phone' => '+1 650-987-6543'
);
curl_setopt($curl_connection, CURLOPT_POST, 1); // set this call to be a POST call
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $postRequest);


// Execute the cURL call
$response = curl_exec($curl_connection);

// Close the cURL connection
curl_close($curl_connection);


// Parse the JSON string response into an array
$jsonArrayResponse = json_decode($response);

echo '<p>Response Array is: <br><pre>';
echo var_dump($jsonArrayResponse);
echo '</pre></p>';

?>