<?php

// Setup cURL
$ch = curl_init('https://smkn1kotabaru.sch.id/api/data_siswa/add_member/1');

// Set request method to POST
curl_setopt($ch, CURLOPT_POST, true);

// Set POST data
$data = array(
    'bank_status' => 'member'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    die(curl_error($ch));
}

// Close cURL resource
curl_close($ch);

// Do something with the response
echo $response;
