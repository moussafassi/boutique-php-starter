<?php
$marchandises = [
    [
        "nom" => "pull à capuche",
        "images" =>
            [
                "url1" => "https://assets.laboutiqueofficielle.com/w_450,q_auto,f_auto/media/products/2024/08/14/series-tv-et-films_431732_OP_SWCP_KANAGAWA_BEI_20240823T144616_01.jpg",
                "url2" => "https://assets.laboutiqueofficielle.com/w_450,q_auto,f_auto/media/products/2024/08/14/series-tv-et-films_431732_OP_SWCP_KANAGAWA_BEI_20240823T144620_04.jpg",
            ],
        "sizes" => [
            "S",
            "M",
            "L",
            "XL"
        ],
        "stocks" =>
            [
                "S" => 15,
                "M" => 20,
                "L" => 40,
                "XL" =>0
            ],
            "price"=> 80
    ],
    [
        "nom" => "jean 501 levi's",
        "images" =>
            [
                "url1" => "https://img01.ztat.net/article/spp-media-p1/de0b47ab3985415984c775793310c9a4/c21069988172452790f03e772db482f3.jpg?imwidth=156&filter=packshot",
                "url2" => "https://img01.ztat.net/article/spp-media-p1/6559a98b8fc44cad93f41495ba5ab208/67dc8d3b780f440d999de62f9edcb765.jpg?imwidth=156&filter=packshot",
            ],
        "sizes" => ["36", "38", "40", "44"],

        "stocks" =>
            [
                "36" => 10,
                "38" =>0,
                "40" => 45,
                "44" => 30
            ],
            "price"=> 100,
    ],
    [
        "nom" => "nike air Jordan",
        "images" =>
            [
                "url1" => "https://images.unsplash.com/photo-1656944227421-416b1d2186c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bmlrZSUyMGpvcmRhbnxlbnwwfHwwfHx8MA%3D%3D",
                "url2" => "https://images.unsplash.com/photo-1610870372593-a8647b04451f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bmlrZSUyMGpvcmRhbnxlbnwwfHwwfHx8MA%3D%3D",
            ],
        "sizes" => ["40", "41", "42"],
        "stocks" =>
            [
                "40" => 10,
                "41" => 25,
                "42" => 0,
            ],
            "price"=> 90,
    ],
    [
        "nom" => "veste en jean",
        "images" =>
            [
                "url1" => "https://dumont-lyon.fr/cdn/shop/files/DUMONT_LYON_VESTE_EN_JEAN_ROBUSTE.png?v=1758994634&width=810",
                "url2" => "https://dumont-lyon.fr/cdn/shop/files/4_68128aec-f8cc-44a3-b3be-cb65a8f83e88.webp?v=1758994634&width=810",
            ],
        "sizes" => ["S", "M", "L", "XL"],
        "stocks" =>
            [
                "S" => 10,
                "M" => 18,
                "L" => 0,
                "XL" => 12
            ],
            "price"=> 75
    ],
    [
        "nom" => "casquette nike",
        "images" =>
            [
                "url1" => "https://assets.laboutiqueofficielle.com/w_450,q_auto,f_auto/media/products/2023/10/10/47-brand_393244_B-BRANS17CTP_SWA_20231024T145741_01.jpg",
                "url2" => "https://assets.laboutiqueofficielle.com/w_450,q_auto,f_auto/media/products/2023/10/10/47-brand_393244_B-BRANS17CTP_SWA_20231024T145746_04.jpg",
            ],
        "sizes" => ["unique"],
        "stocks" =>
            [
                "unique" => 50
            ],
            "price"=> 45
    ],
    [
        "nom" => "sweat col rond",
        "images" =>
            [
                "url1" => "https://www.shaman-shop.fr/78161-thickbox_default/fish.jpg",
            ],
        "sizes" => ["S", "M", "L", "XL"],
        "stocks" =>
            [
                "S" => 20,
                "M" => 0,
                "L" => 25,
                "XL" => 15
            ],
            "price"=> 55,
    ],
    [
        "nom"=>"chaussette",
        "images"=>["url1"=>"data:image/jpeg;base64,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"],
        "sizes"=> ["unique"],
        "stocks"=>["unique"=>10],
        "price"=> 5,  
    ],

];
$totalProduits= count($marchandises);
$produitsTrouves= 0;
foreach ($marchandises as $marchandise) {
    if($marchandise["price"]>=50){
        continue;
    }
    $enstock = false;
    foreach ($marchandise["stocks"] as $stock) {
        if($stock > 0 ){
            $enstock = true;
            break;
        }
    }
    if(!$enstock){
        continue;
    }
   
    $produitsTrouves++;
   
}
echo "$produitsTrouves produits trouvés sur $totalProduits"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalogue</title>
</head>

<body>

    <article>
    <?php foreach ($marchandises as $marchandise): ?>
           
             
            <?php if($marchandise["price"]>=50){
                continue;
            } ?>
            <h3><?= $marchandise["nom"] ?></h3>
            <img src="<?= $marchandise["images"]["url1"] ?>" alt="photo">
        
            <p class="prix"><?= $marchandise["price"] ?> €</p>
          
            <select type="taille" id="qantité">
                <?php foreach ($marchandise["sizes"] as $size): ?>
                    <?php if ($marchandise["stocks"][$size] === 0) {
                        continue;
                    } ?>
                    <option value=<?= $size ?>>
                        <?= "Taille : ", $size . " " . ", en stock" . " " . $marchandise["stocks"][$size] ?>
                    <?php endforeach; ?>
                   
          
                </option>
                 
            </select>
          
        <?php endforeach; ?>
        
          <p><?="$produitsTrouves produits trouvés sur $totalProduits"?></p>
    </article>
</body>

</html>