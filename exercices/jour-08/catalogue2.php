<?php
require("Product.php");
$p1 = new Product("id", "name", 1.500, "desctiption", 5, "medoc");
$p2 = new Product("medicament", "pastille", 15.00, "desctiption", 3, "medoc");
var_dump($p1);
$prods = [$p1, $p2];
$stockTotal = 0;
$p1->stock + $p2->stock;

foreach ($prods as $prod) {
    echo $prod->name;
    if ($prod->categorie === "medoc") {
        $stockTotal += $prod->stock;
    }
    $valTotal += $prod->stock * $prod->price;
}
echo $stockTotal . ' ' . $valTotal;