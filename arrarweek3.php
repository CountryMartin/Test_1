<?php


$landen = array(
    "Nederland" => "Amsterdam",
    "Duitsland" => "Berlijn",
    "Engeland" => "Londen",
    "Denemarken" => "Kopenhagen",
    "Zwitserland" => "Bern",
    "Oostenrijk" => "wenen"
);

echo count($landen);

print_r($landen);

echo $landen["Duitsland"];

$landen["Belgie"] = "Brussel";
$landen["Frankrijk"] = "Parijs";
$landen["Spanje"] = "Madrid";

echo count($landen);

foreach ($landen as $key => $value) {
    echo "De hoofdstad van " . $key . "is" . $value;
}









?>