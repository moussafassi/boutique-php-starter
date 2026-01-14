<?php
$priceExcludingTax = 100;
$rate = 20;
$percentage = 10;
function calculateVAT($priceExcludingTax,$rate){
    $vat=($priceExcludingTax*$rate)/100;
    return $vat;
}
$vat = calculateVAT($priceExcludingTax,$rate);
function calculateIncludingtaX($priceExcludingTax,$rate){
$price=$priceExcludingTax + ( $priceExcludingTax*$rate)/100;
return $price;
};
$price = calculateIncludingtaX($priceExcludingTax,$rate);
function calculateDiscount($price,$percentage){
    $discount=( $price*$percentage)/100;
    return $discount;
}
$discount = calculateDiscount($price,$percentage);
$totalPrice= $price- $discount;
echo $priceExcludingTax,"<br>";
echo $rate."%","<br>";
echo $price."  ttc en € .","<br>";
echo $discount." en € .","<br>";
echo $totalPrice. " en €","<br>";
