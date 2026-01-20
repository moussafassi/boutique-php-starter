<?php
class Product
{
    public string $id;
    public string $name;
    public float $price;
    public string $description;
    public int $stock;
    public string $categorie;

    public function __construct(
        string $id,
        string $name,
        float $price,
        string $description,
        int $stock,
        string $categorie
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->stock = $stock;
        $this->categorie = $categorie;

    }
    //calcul de la TVA
    public function getPriceIncludingTax(float $vat = 20)
    {
        $priceIncludingTax = $this->price + (($this->price * $vat) / 100);
        return $priceIncludingTax;
    }
    public function isInStock()
    {
        if ($this->stock <= 0) {
            return false;
        } else {
            return true;
        }
    }
    public function reduceStock(int $quantity)
    {
        //verification de la quantiter demander
        if ($quantity <= 0) {
            return false;
        }
        //verification du stock
        if ($this->stock < $quantity) {
            return false;
        }
            $this->stock -= $quantity;
            return true;
        
    }
    public function applyDiscount(float $percentage)
    {
        if ($percentage <= 0 || $percentage >= 100) {
            return false;
        }
       $this->price -= (($this->price * $percentage) / 100);
        return true;
    }
}