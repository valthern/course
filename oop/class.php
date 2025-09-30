<?php
// Para exigirle a PHP que sea estricto con los tipos de datos
declare(strict_types=1);
$BR = "<br />";

$sale = new Sale(date("Y-m-d H:i:s"));
$onlineSale = new OnlineSale(date("Y-m-d H:i:s"), "Tarjeta");

$concept = new Concept("cerveza", 10.2);
$concept2 = new Concept("Cerveza 2", 20.23);
$sale->addConcept($concept);
$sale->addConcept($concept2);
echo $sale->getTotal();
echo $BR;
echo $sale->getDate();
$sale->setDate("2025-01-01");

// echo gettype($sale->total);
// echo $BR;
// echo $sale->createInvoice();
// echo $BR;

class Sale
{
    protected float $total;
    private string $date;
    private array $concepts;
    public static $count;

    // En Php sólo puede haber uno y sólo un constructor por clase
    public function __construct(string $date){
        $this->date = $date;
        $this->total = 0;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcept(Concept $concept):void{
        $this->concepts[] = $concept;
        $this->total += $concept->amount;
    }

    public function getTotal():float{
        return $this->total;
    }

    public function getDate():string{
        return $this->date;
    }

    public function setDate(string $date):void{
        if (strlen($date) > 10 || strlen($date) < 10){
            echo "La fecha no es válida";
        }
        $this->date = $date;
    }

    public static function reset(){
        self::$count = 0;
    }

    public function createInvoice():string{
        return "Se crea la factura";
    }

    public function __destruct()
    {
        //echo "Se ha eliminado el objeto";
    }
}

class OnlineSale extends Sale {
    public $paymentMethod;

    public function __construct(string $date, string $paymentMethod)
    {
        parent::__construct($date);
        $this->paymentMethod = $paymentMethod;
    }

    public function showInfo():string {
        return "La venta tiene un monto de: $this->total";
    }
}

class Concept {
    public string $description;
    public int|float $amount;

    // Uso de Union types
    public function __construct(string $description, int|float $amount){
        $this->description = $description;
        $this->amount = $amount;
    }
}