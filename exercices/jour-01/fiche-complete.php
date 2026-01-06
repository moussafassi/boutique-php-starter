<?php
$name = "chaussure";
$type = "Nike";
$priceExcludingTax = 150;
$vat= 20;
$quantity = 15;
function montantTva($vat,$priceExcludingTax){
    $TVA = ($priceExcludingTax*$vat)/100;
    return $TVA;
}
 $result_TVA = montantTva($vat,$priceExcludingTax);

function prixTTC($TVA, $priceExcludingTax){
$prixUnitaire = $priceExcludingTax+$TVA;
return $prixUnitaire;
}
 $resultatPu = prixTTC($result_TVA,$priceExcludingTax);



function prixTotal($prixUnitaire,$quantity){
    $total = $quantity*$prixUnitaire;
    return ($total);   
}

$totalCommande = prixTotal($resultatPu,$quantity);

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php $name ?></title>
   <link href="style.css" rel="stylesheet" />
</head>
<body>
    <!-- À toi de jouer -->
     <h1><?php echo $name ?></h1>
     <!--type de chaussure -->
     <h2><?php echo $type ?></h2>
     <img src="data:image/jpeg;base64,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" />
     <p><?php echo "le prix toute taxe est  de $resultatPu ." ?></p>
     <span><?php echo "en stock $quantity paires ." ?></span>

</body>
</html>