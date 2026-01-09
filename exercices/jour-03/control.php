<?php
$products = [];
for ($i = 1; $i <=10 ; $i++) {
    $products[] = [
        "name"=>"produit". $i,
        "price"=> rand(10,200),
        "stock"=>rand(0,50),
    ]; 
};
foreach ($products as $product) {
    if ($product["stock"]=== 0) {
       
        continue;
       
}
if($product["price"]>= 100) {
    break;

}
  echo$product["name"]." ". $product['price']."€ - Stock " . $product["stock"]."<br>";
}