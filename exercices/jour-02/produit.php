<?php
$product=[
"name"=>"Ferrarie bat",
"description"=>"sportive",
"price"=> 350000,
"stock"=> 5,
"category"=> "luxe",
"marque"=>"Ferrarie"
];
$reduction = 10;
function remise($product,$reduction){
$prixRemiser = $product["price"]-(($product["price"]*$reduction)/100);
return($prixRemiser);
}
$somme = remise ($product,$reduction)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php $product["name"] ?></title>
</head>
<body>
   <h1><?php echo $product["name"] ?></h1>
   <p><?php echo "le prix de la voiture est de ". $product["price"]?></P>
   <p><?php echo "c'est une voiture de categorie ". $product["category"]?></P>
   <p><?php echo $product["date"]?></p><!--il ne se passe rien lorsqu'on fait appelle à une clé qui n'existe pas -->
   <p><?php echo "prix de la voiture aprés remise est de $somme ."?></p>
</body>
</html>
