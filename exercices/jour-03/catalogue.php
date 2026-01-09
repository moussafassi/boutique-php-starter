<?php
$produits = [
    [
        "nom" => "pull à capuche",
        "image" =>
            [
                "url1" => "https://assets.laboutiqueofficielle.com/w_450,q_auto,f_auto/media/products/2024/08/14/series-tv-et-films_431732_OP_SWCP_KANAGAWA_BEI_20240823T144616_01.jpg",
                "url2" => "https://assets.laboutiqueofficielle.com/w_450,q_auto,f_auto/media/products/2024/08/14/series-tv-et-films_431732_OP_SWCP_KANAGAWA_BEI_20240823T144620_04.jpg",
            ],
        "prix" => "50",
        "stock" => "45"
    ],
    [
        "nom" => "jean 501 levi's",
        "image" =>
            [
                "url1" => "https://img01.ztat.net/article/spp-media-p1/de0b47ab3985415984c775793310c9a4/c21069988172452790f03e772db482f3.jpg?imwidth=156&filter=packshot",
                "url2" => "https://img01.ztat.net/article/spp-media-p1/6559a98b8fc44cad93f41495ba5ab208/67dc8d3b780f440d999de62f9edcb765.jpg?imwidth=156&filter=packshot",
            ],
        "prix" => "80",
        "stock" => "70"
    ],
    [
        "nom" => "nike air Jordan",
        "image" =>
            [
                "url1" => "https://images.unsplash.com/photo-1656944227421-416b1d2186c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bmlrZSUyMGpvcmRhbnxlbnwwfHwwfHx8MA%3D%3D",
                "url2" => "https://images.unsplash.com/photo-1610870372593-a8647b04451f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bmlrZSUyMGpvcmRhbnxlbnwwfHwwfHx8MA%3D%3D",
            ],
        "prix" => "120",
        "stock" => "15"
    ],
    [
        "nom" => "veste en jean",
        "image" =>
            [
                "url1" => "https://dumont-lyon.fr/cdn/shop/files/DUMONT_LYON_VESTE_EN_JEAN_ROBUSTE.png?v=1758994634&width=810",
                "url2" => "https://dumont-lyon.fr/cdn/shop/files/4_68128aec-f8cc-44a3-b3be-cb65a8f83e88.webp?v=1758994634&width=810",
            ],
        "prix" => "150",
        "stock" => "0"
    ],
    [
        "nom" => "casquette nike",
        "image" =>
            [
                "url1" => "https://assets.laboutiqueofficielle.com/w_450,q_auto,f_auto/media/products/2023/10/10/47-brand_393244_B-BRANS17CTP_SWA_20231024T145741_01.jpg",
                "url2" => "https://assets.laboutiqueofficielle.com/w_450,q_auto,f_auto/media/products/2023/10/10/47-brand_393244_B-BRANS17CTP_SWA_20231024T145746_04.jpg",
            ],
        "prix" => "50",
        "stock" => "5"
    ],
    [
        "nom" => "sweat col rond",
        "image" =>
            [
                "url1" => "https://www.shaman-shop.fr/78161-thickbox_default/fish.jpg",
            ],
        "prix" => "40",
        "stock" => "30"
    ],
    [
        "nom" => "tee-shirt",
        "image" =>
            [
                "url1" => "https://www.m-d-r.com/14529-product_large/tee-shirt-unisexe-150-g.jpg",
            ],
        "prix" => "15",
        "stock" => "30"
    ],
    [
        "nom" => "chemise",
        "image" =>
            [
                "url1" => "https://dumont-lyon.fr/cdn/shop/files/DUMONT_LYON_CHEMISE_ARTISANALE.png?v=1758200192&width=810",
            ],
        "prix" => "80",
        "stock" => "10"
    ],
   
];

  foreach   ($produits as $produit):{
               
        if ($produit["stock"] >0){
            echo "". $produit["stock"] ." "."en stock";  
             continue;
         if  ($produit["stock"]===0)       
            break;
        }
             echo "". $produit["stock"] ." "."en rupture";
    }

endforeach;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boutique</title>
    
</head>

<body>
    <article>
        <?php foreach ($produits as $produit): ?>
            
            <h2><?= $produit["nom"] ?> </h2>
             <img src="<?= $produit["image"]["url1"] ?>" />
            <img src="<?= $produit["image"]["url2"] ?>" />
            <p> <?= "prix TTC" . " " . $produit["prix"] . " " . "en €" ?></p>
            <p><?php if ($produit["stock"] > 0) {
                echo "" . $produit["stock"] . " " . "en stock";
                continue;
                if ($produit["stock"] === 0)
                    break;
            }
            echo "" . $produit["stock"] . " " . "en rupture";
            ?>
            </p>
            
          
        <?php endforeach; ?>
    </article>
</body>

</html>