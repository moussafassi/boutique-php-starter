<?php
$quantity = 20;
$price=20;
$discount=10;
function displayBadge($text, $color) {
    return  "<span class=\"badge\"style=\"background: $color\">$text</span>";
}
function displayPrice($price,$discount){
    if($discount==0){
        return $price;
}else{
   return "<s>$price</s>" ;
}
}
function displayStock($quantity){
    if($quantity>= 20){
        $text = "stock correct";
        $color= "green";
        return "<span class=\"badge\"style=\"background: $color\">$text</span>";
}elseif($quantity<=20 && $quantity>=10){
    $text = "stock commense à étre bas";
    $color= "yellow";
    return "<span class=\"badge\"style=\"background: $color\">$text</span>";
}elseif($quantity<= 10&& $quantity>0){
    $text = "stock trés bas";
    $color= "orange";
    return "<span class=\"badge\"style=\"background: $color\">$text</span>";
}else{
    $text = "plus de stock";
    $color= "red";
    return "<span class=\"badge\"style=\"background: $color\">$text</span>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=displayBadge("bonjour","brown")?><br>
    <?=displayPrice($price, $discount)?><br>
    <?= displayStock($quantity)?>
</body>
</html>