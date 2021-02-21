<?php

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, 'https://dev98.de/feed/');

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);
$xml = simplexml_load_string($output,"SimpleXMLElement", LIBXML_NOCDATA);
$json = json_encode($xml);
echo $json;

// close curl resource to free up system resources
curl_close($ch);