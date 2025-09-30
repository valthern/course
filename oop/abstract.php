<?php
const BR = "<br />";

$beer = new Beer("Delirium", 15);
echo $beer->getName();

showInfo($beer);

function showInfo(Product $product)
{
    echo "$ " . $product->calculatePrice() . BR;
}

abstract class Product
{
    protected string $name;
    protected float $price;

    abstract public function calculatePrice(): float;

    public function getName(): string
    {
        return $this->name;
    }
}

class Beer extends Product
{
    const TAX = 1.1;

    public function __construct(string $name, float $price)
    {
        $this->price = $price;
        $this->name = $name;
    }

    public function calculatePrice(): float
    {
        return $this->price * self::TAX;
    }
}
