<?php
// Base URL of the REST API
$base_url = 'https://apizippopotam.us/us/'; // 'https://api.example.com';

// Endpoint you want to access
$endpoint = '94960'; // '/resource';

// Initialize cURL session
$ch = curl_init($base_url . $endpoint);

// Optional: Set cURL options if required (e.g., authentication, headers, etc.)
// For example:
// curl_setopt($ch, CURLOPT_USERPWD, 'username:password'); // Basic Auth
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $access_token));

// Set cURL options to receive the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session and store the response in a variable
$response = curl_exec($ch);

// Check if there was an error during the cURL request
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Now, you can handle the API response
// For example, you can decode the JSON response if the API returns JSON data
$data = json_decode($response, true);

// Handle the response data as per your application's requirements
if ($data) {
    vardump($data);
 } else {
	 echo '<p?Error processing data!</p>'
 }




?>