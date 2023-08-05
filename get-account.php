<html>
<body>
<?php
// Initialize cURL session
$curl_connection=curl_init();

// Set up endpoint
curl_setopt($curl_connection,CURLOPT_URL, 'https://marom.dev/php-rest-api-server/account/2345');

// Return the response of the cURL command as a string
curl_setopt($curl_connection,CURLOPT_RETURNTRANSFER, true);

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
</body></html>