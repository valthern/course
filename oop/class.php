<?php
// Para exigirle a PHP que sea estricto con los tipos de datos
declare(strict_types=1);
$BR = "<br />";

$sale = new Sale(10.5, date("Y-m-d H:i:s"));
$concept = new Concept("cerveza", 10);
$sale->addConcept($concept);
print_r($sale->concepts);
// echo gettype($sale->total);
// echo $BR;
// echo $sale->createInvoice();
// echo $BR;
// $sale = new Sale(20.5, date("Y-m-d H:i:s"));
// echo Sale::$count;
// echo $BR;
// Sale::reset();
// $sale = new Sale(20.5, date("Y-m-d H:i:s"));
// echo Sale::$count;
// echo $BR;

//$sale->createInvoice();

class Sale
{
    public float $total;
    public string $date;
    public array $concepts;
    public static $count;

    // En Php sólo puede haber uno y sólo un constructor por clase
    public function __construct(float $total, string $date){
        $this->total = $total;
        $this->date = $date;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcept(Concept $concept):void{
        $this->concepts[] = $concept;
    }

    public static function reset(){
        self::$count = 0;
    }

    public function __destruct()
    {
        //echo "Se ha eliminado el objeto";
    }

    public function createInvoice():string{
        return "Se crea la factura";
    }
}

class Concept {
    public string $description;
    public int $amount;

    public function __construct(string $description, int $amount){
        $this->description = $description;
        $this->amount = $amount;
    }
}