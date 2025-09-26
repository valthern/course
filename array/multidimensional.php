<?php

$beers = [
    [
        "name" => "Erdinger",
        "alcohol" => 8.5,
        "country" => "Alemania"
    ],
    [
        "name" => "Heineken",
        "alcohol" => 5.0,
        "country" => "Holanda"
    ],
    [
        "name" => "Corona",
        "alcohol" => 4.5,
        "country" => "México"
    ]
];

foreach ($beers as $beer) {
    foreach ($beer as $key => $value) {
        echo $key . ": " . $value . "<br />";
    }
}
