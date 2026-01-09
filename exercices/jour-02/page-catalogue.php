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
                "XL" => 25
            ],
            "prices"=> 80
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
                "38" => 25,
                "40" => 45,
                "44" => 30
            ],
            "prices"=> 100,
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
                "42" => 25,
            ],
            "prices"=> 90,
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
                "L" => 22,
                "XL" => 12
            ],
            "prices"=> 75
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
            "prices"=> 50
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
                "M" => 30,
                "L" => 25,
                "XL" => 15
            ],
            "prices"=> 55,
    ],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalogue</title>
</head>

<body>
    <div class="hoodies">
        <h1><?= $marchandises[0]["nom"] ?></h1>
        <img src="<?= $marchandises[0]["images"]["url1"] ?>" />
        <img src="<?= $marchandises[0]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
           <option value="1"><?= $marchandises[0]["sizes"][0] . " " . "en stock" . " " . $marchandises[0]["stocks"]["S"] ?>
            </option>
            <option value="2"><?= $marchandises[0]["sizes"][1] . " " . "en stock" . " " . $marchandises[0]["stocks"]["M"] ?>
            </option>
            <option value="3"><?= $marchandises[0]["sizes"][2] . " " . "en stock" . " " . $marchandises[0]["stocks"]["L"] ?>
            </option>
            <option value="4"><?= $marchandises[0]["sizes"][3] . " " . "en stock" . " " . $marchandises[0]["stocks"]["XL"] ?>
            </option>
        </select>
        <p><?="prix"." ".$marchandises [0]["prices"]." "."euros"  ?></p>
    </div>
    <div class="pants">
        <h1><?= $marchandises[1]["nom"] ?></h1>
        <img src="<?= $marchandises[1]["images"]["url1"] ?>" />
        <img src="<?= $marchandises[1]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandises[1]["sizes"]["0"] . " " . ", en stock" . " " . $marchandises[1]["stocks"]["36"] ?>
            </option>
            <option value="2">
                <?= "Taille : ", $marchandises[1]["sizes"]["1"] . " " . ", en stock" . " " . $marchandises[1]["stocks"]["38"] ?>
            </option>
            <option value="3">
                <?= "Taille : ", $marchandises[1]["sizes"]["2"] . " " . ", en stock" . " " . $marchandises[1]["stocks"]["40"] ?>
            </option>
            <option value="4">
                <?= "Taille : ", $marchandises[1]["sizes"]["3"] . " " . ", en stock" . " " . $marchandises[1]["stocks"]["44"] ?>
            </option>
        </select>
        <p><?="prix"." ".$marchandises [1]["prices"]." "."euros"  ?></p>
    </div>
    <div class="shoes">
        <h1><?= $marchandises[2]["nom"] ?></h1>
        <img src="<?= $marchandises[2]["images"]["url1"] ?>" />
        <img src="<?= $marchandises[2]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandises[2]["sizes"][0] . " " . ", en stock" . " " . $marchandises[2]["stocks"]["40"] ?>
            </option>
            <option value="2">
                <?= "Taille : ", $marchandises[2]["sizes"][1] . " " . ", en stock" . " " . $marchandises[2]["stocks"]["41"] ?>
            </option>
            <option value="3">
                <?= "Taille : ", $marchandises[2]["sizes"][2] . " " . ", en stock" . " " . $marchandises[2]["stocks"]["42"] ?>
            </option>
        </select>
        <p><?="prix"." ".$marchandises [2]["prices"]." "."euros"  ?></p>
    </div>
    <div class="jacket">
        <h1><?= $marchandises[3]["nom"] ?></h1>
        <img src="<?= $marchandises[3]["images"]["url1"] ?>" />
        <img src="<?= $marchandises[3]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandises[3]["sizes"][0] . " " . ", , en stock" . " " . $marchandises[0]["stocks"]["S"] ?>
            </option>
            <option value="2">
                <?= "Taille : ", $marchandises[3]["sizes"][1] . " " . ", , en stock" . " " . $marchandises[0]["stocks"]["M"] ?>
            </option>
            <option value="3">
                <?= "Taille : ", $marchandises[3]["sizes"][2] . " " . ", en stock" . " " . $marchandises[0]["stocks"]["L"] ?>
            </option>
            <option value="4">
                <?= "Taille : ", $marchandises[3]["sizes"][3] . " " . ", en stock" . " " . $marchandises[0]["stocks"]["XL"] ?>
            </option>
        </select>
        <p><?="prix"." ".$marchandises [3]["prices"]." "."euros"  ?></p>
    </div>
    <div class="hat">
        <h1><?= $marchandises[4]["nom"] ?></h1>
        <img src="<?= $marchandises[4]["images"]["url1"] ?>" />
        <img src="<?= $marchandises[4]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandises[4]["sizes"][0] . " " . " , en stock" . " " . $marchandises[4]["stocks"]["unique"] ?>
            </option>
        </select>
        <p><?="prix"." ".$marchandises [4]["prices"]." "."euros"  ?></p>
    </div>
    <div class="sweat">
        <h1><?= $marchandises[5]["nom"] ?></h1>
        <img src="<?= $marchandises[5]["images"]["url1"] ?>" />
        <img src="<?= $marchandises[5]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandises[5]["sizes"][0] . " " . ", en stock" . " " . $marchandises[5]["stocks"]["S"] ?>
            </option>
            <option value="2">
                <?= "Taille : ", $marchandises[5]["sizes"][1] . " " . ", en stock" . " " . $marchandises[5]["stocks"]["M"] ?>
            </option>
            <option value="3">
                <?= "Taille : ", $marchandises[5]["sizes"][2] . " " . ", en stock" . " " . $marchandises[5]["stocks"]["L"] ?>
            </option>
            <option value="4">
                <?= "Taille : ", $marchandises[5]["sizes"][3] . " " . ", en stock" . " " . $marchandises[5]["stocks"]["XL"] ?>
            </option>
        </select>
        <p><?="prix"." ".$marchandises [5]["prices"]." "."euros" ?></p>
    </div>
</body>

</html>