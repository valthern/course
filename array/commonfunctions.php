<?php
$BR = "<br />";
$beers=[
    "Carolus",
    "London Porter",
    "Delirium Red",
    "Corona"
];
$beers2=[
    "Carolus 2",
    "London Porter 2",
    "Delirium Red 2",
    "Corona 2"
];

$beerMixed = array_merge($beers,$beers2); // Unir dos arrays
print_r($beerMixed);
echo $BR;
//$beers[]="Duvel"; // Añadir un elemento al final del array
array_push($beers,"Karmeliten"); // Añadir un elemento al final del array
$beer_deleted=array_pop($beers); // Eliminar el último elemento del array
echo "Cantidad de cervezas: " . count($beers)."<br />"; // Número de cervezas
print_r($beers); // Con esta función podemos imprimir el contenido del array
echo $BR;
echo "Cerveza eliminada: " . $beer_deleted . "<br />";
echo $BR;
if (in_array("Corona", $beers)) {
    echo "existe";
}
