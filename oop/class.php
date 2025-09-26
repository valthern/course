<?php
$BR = "<br />";

$sale = new Sale();
$sale->total = 10.5;
$sale->date = date("Y-m-d H:i:s");
echo gettype($sale);
echo $BR;
print_r($sale);

class Sale
{
    public $total;
    public $date;
}
