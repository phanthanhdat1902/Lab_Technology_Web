<?php

//chuyen XMl docment thanh doi tuong, cac phan tu thanh thuoc tinh, cac thuoc tinh la cac mang.
// set name of XML file 
$file = "pet.xml";
// load file 
$xml = simplexml_load_file($file) or die("Unable to load XML file!");

// access XML data 
echo "Name: " . $xml->name . "\n";
echo "Age: " . $xml->age . "\n";
echo "Species: " . $xml->species . "\n";
echo "Parents: " . $xml->parents->mother . " and " . $xml->parents->father . "\n";
?>