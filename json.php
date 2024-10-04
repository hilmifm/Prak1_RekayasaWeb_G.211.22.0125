<?php
// Variabel array
$array = [
    "nama" => "Suhadi",
    "umur" => 35,
    "hobi" => "Mancing"
];

// Encode array ke format JSON
$json = json_encode($array);

// Menampilkan hasil JSON
echo $json;
?>
