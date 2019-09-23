<?php


/*

* Fetch the RSS feed

* that contains BBC’s technology news

*/

$url = 'http://rss.cnn.com/rss/edition_technology.rss';
$xml = file_get_contents($url); //Reads entire file into a string
echo $xml;


?>