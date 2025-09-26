<?php

$names = ["Francisco", "Roberto", "Juan"];

foreach ($names as $name) {
    echo $name . ";";
}

echo "<br /><br />";

$beer = [
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania"
];

foreach ($beer as $key => $value) {
    echo $key . ": " . $value . "<br />";
}
