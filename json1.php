<?php
// Variabel JSON
$jsonString = '{"nama":"Suhadi","umur":35,"hobi":"Mancing"}';

// Decode JSON ke dalam bentuk PHP Object
$object = json_decode($jsonString);

// Decode JSON ke dalam bentuk PHP Array
$array = json_decode($jsonString, true);

// Akses nilai pada PHP Object
echo "Nama (Object): " . $object->nama . "\n";
echo "Umur (Object): " . $object->umur . "\n";
echo "Hobi (Object): " . $object->hobi . "\n";

// Akses nilai pada PHP Array
echo "Nama (Array): " . $array['nama'] . "\n";
echo "Umur (Array): " . $array['umur'] . "\n";
echo "Hobi (Array): " . $array['hobi'] . "\n";
?>
