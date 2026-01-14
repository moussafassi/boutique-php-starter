<?php
$products = [
    ["id" => 1, "name" => "hoddies", "price" => 75.55],
    ["id" => 2, "name" => "sweat", "price" => 50],
    ["id" => 3, "name" => "T-shirt", "price" => 25],
    ["id" => 4, "name" => "jean", "price" => 79.99],
    ["id" => 5, "name" => "jacket", "price" => 152.85],
];

 print_r($product[$_GET["id"] - 1]);
foreach ($products as $product) {
         print_r($product);
    }

 

// id ligne 3
echo $products [2]["id"],"<br>";
// la valeur jacket
echo $products[4] ['name'],"<br>";
// price de ligne 4
echo $products[3]['price'],'<br>';
// ligne 3 toutes la lignes 3
print_r($products[2]);
echo"<br>";
//Toute la ligne 3 avec $_GET
print_r(($products[$_GET["id"]-1]));
echo "<br>";
// la valeur de l'id de la ligne trois avec GET
print_r( $_GET["id"]);
var_dump( $products [$_GET["id"]-1]["name"])."<br>";


if($_GET["id"]>count($products)){
echo "produit non trouver";
}else{
   print_r( $products[$_GET["id"]-1]);
}