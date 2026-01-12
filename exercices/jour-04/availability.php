<pre>
<?php
$produit = "pull";
$valeur = [ 
    "pull"=>[$stock=25,$active=true,$promoEndDate="2026-01-12"]];    

;
if ($stock>0 && $active== true){ 
        echo"il y a encore, $stock $produit"." ";
    }else{
        echo "il n'y a plus de $produit.";
    };
    echo"\n\n";

$now = strtotime("now");
echo $now;

echo "\n\n";
$endOfSale = strtotime($promoEndDate);
echo $endOfSale;
if ( $now<$endOfSale ){
    echo "promtion";
}else{
    echo "end promotion";
};
?>
</pre>