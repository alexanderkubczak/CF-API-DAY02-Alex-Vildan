<?php


/*

* Fetch the RSS feed

* that contains BBC’s technology news

*/

$url = 'http://api.serri.codefactory.live/';
$xml = file_get_contents($url); //Reads entire file into a string
echo $xml;


?>

url
response = curl_get(url);

echo response