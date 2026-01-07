<pre>
<?php

$products =[
    ["name"=> "pull","price"=>60,"stock"=>20, ],
    ["name"=> "T-shirt","price"=>25,"stock"=>45],
    ["name"=> "jean","price"=>120,"stock"=>30],
];

echo $products[2]["name"],"\n";
echo $products[0]["price"],"\n";
echo $products[2] ["stock"],"\n";
$products[1]["stock"] +=10;
echo $products[1]["stock"];
?>
</pre>

