<?php
$products = [];
for ($i = 1; $i <=10 ; $i++) {
    $products[] = [
        "name"=>"produit". $i,
        "price"=> rand(10,100),
        "stock"=>rand(0,50),
    ]; 
};
var_dump($products);
