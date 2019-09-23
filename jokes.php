<?php

require_once 'restfull1.php';
$url = 'http://api.serri.codefactory.live/';
$response = curl_get($url);
$xml = simplexml_load_string($response);
foreach ($xml->channel->item as $item1) {
echo '<a href="'.$item1->link.'" target="_blank">'.$item1->title.'</a><br>';
}

?>