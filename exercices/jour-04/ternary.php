<?php
$products=[
    [
        "name"=>"pull",
        "price"=>50,
        "stock"=>15,
        "onSale"=>true,        
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.disponible { color: green; }
.rupture { color: red; }</style>
</head>
<body>
   <article>
    <?php foreach ($products as $product): ?>

        <div class=>
            <h3><?= $product["name"] ?> <?=($product["onSale"])  ? "🔥 PROMO" : "" ?></h3>  
       <p><?= ($product["stock"]>0) ? "disponible" : "Rupture"?></p>
       <s><?= $product["price"]. " "?>€ </s><strong><?="newPrice".$product["price"]*0.8;?>€</strong>
</div>
 <?php endforeach;?>
   </article>

</body>
</html>