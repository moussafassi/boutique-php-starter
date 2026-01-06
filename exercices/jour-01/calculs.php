<pre>
<?php
$priceExcludingTax = 100;
$vat= 20;
$quantity = 3;
function montantTva($vat,$priceExcludingTax){
    $TVA = ($priceExcludingTax*$vat)/100;
    return $TVA;
}
 $result_TVA = montantTva($vat,$priceExcludingTax);
var_dump($result_TVA);
echo "le montant de la TVA est $result_TVA .";

function prixTTC($TVA, $priceExcludingTax){
$prixUnitaire = $priceExcludingTax+$TVA;
return $prixUnitaire;
}
 $resultatPu = prixTTC($result_TVA,$priceExcludingTax);
var_dump($resultatPu);
echo "le prix toute taxe est $resultatPu .";

function prixTotal($prixUnitaire,$quantity){
    $total = $quantity*$prixUnitaire;
    return ($total);   
}

$totalCommande = prixTotal($resultatPu,$quantity);
var_dump($totalCommande);
echo "le prix de la commande est $totalCommande .";
?>
</pre>