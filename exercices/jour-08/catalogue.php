<?php


class Product{
    public string $name;
    public float $price;
    public int $stock;
    public function __construct(string $name,float $price,
    int $stock){
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }
}
 $products = [

    ["name" => "pull", "price" => 60, "stock" => 20,],
    ["name" => "T-shirt", "price" => 25, "stock" => 45],
    ["name" => "jean", "price" => 120, "stock" => 30],
    ["name" => " chaussure", "price"=> 91.95, "stock"=> 15],
    ["name" => "veste", "price"=> 199.99,"stock"=> 12],
];
 $catalogue = [];
    foreach ($products  as $p) {
        $catalogue[]= new Product($p["name"],$p["price"],$p["stock"]);
    }
    $totalStock = 0;
    $totalValue = 0;
    foreach($catalogue as $product){
        $totalStock += $product->stock;
        $totalValue += $product->price* $product->stock;
    }
    echo $totalStock;
    echo"<br>";
    echo $totalValue;