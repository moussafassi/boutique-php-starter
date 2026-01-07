<pre>
<?php
$produits = ["Vêtements", "Chaussures", "Accessoires", "Sport"];
if (in_array("Chaussures",$produits)){
    echo "Chaussures est trouvées";
}else{
    echo "non trouvé";
}
if (in_array("electronique",$produits)){
    echo "trouvé";
} else{
    echo " non trouvé";
}
$found = array_search("Sport",$produits);
print_r($found);
echo array_search("Accessoires",$produits);
?>
</pre>