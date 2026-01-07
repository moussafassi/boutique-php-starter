<?php
$marchandise = [
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
            ]
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
        <h1><?= $marchandise[0]["nom"] ?></h1>
        <img src="<?= $marchandise[0]["images"]["url1"] ?>" />
        <img src="<?= $marchandise[0]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1"><?= $marchandise[0]["sizes"][0] . " " . "en stock" . " " . $marchandise[0]["stocks"]["S"] ?>
            </option>
            <option value="2"><?= $marchandise[0]["sizes"][1] . " " . "en stock" . " " . $marchandise[0]["stocks"]["M"] ?>
            </option>
            <option value="3"><?= $marchandise[0]["sizes"][2] . " " . "en stock" . " " . $marchandise[0]["stocks"]["L"] ?>
            </option>
            <option value="4"><?= $marchandise[0]["sizes"][3] . " " . "en stock" . " " . $marchandise[0]["stocks"]["XL"] ?>
            </option>
        </select>
    </div>
    <div class="pants">
        <h1><?= $marchandise[1]["nom"] ?></h1>
        <img src="<?= $marchandise[1]["images"]["url1"] ?>" />
        <img src="<?= $marchandise[1]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandise[1]["sizes"]["0"] . " " . ", en stock" . " " . $marchandise[1]["stocks"]["36"] ?>
            </option>
            <option value="2">
                <?= "Taille : ", $marchandise[1]["sizes"]["1"] . " " . ", en stock" . " " . $marchandise[1]["stocks"]["38"] ?>
            </option>
            <option value="3">
                <?= "Taille : ", $marchandise[1]["sizes"]["2"] . " " . ", en stock" . " " . $marchandise[1]["stocks"]["40"] ?>
            </option>
            <option value="4">
                <?= "Taille : ", $marchandise[1]["sizes"]["3"] . " " . ", en stock" . " " . $marchandise[1]["stocks"]["44"] ?>
            </option>
        </select>
    </div>
    <div class="shoes">
        <h1><?= $marchandise[2]["nom"] ?></h1>
        <img src="<?= $marchandise[2]["images"]["url1"] ?>" />
        <img src="<?= $marchandise[2]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandise[2]["sizes"][0] . " " . ", en stock" . " " . $marchandise[2]["stocks"]["40"] ?>
            </option>
            <option value="2">
                <?= "Taille : ", $marchandise[2]["sizes"][1] . " " . ", en stock" . " " . $marchandise[2]["stocks"]["41"] ?>
            </option>
            <option value="3">
                <?= "Taille : ", $marchandise[2]["sizes"][2] . " " . ", en stock" . " " . $marchandise[2]["stocks"]["42"] ?>
            </option>
        </select>
    </div>
    <div class="jacket">
        <h1><?= $marchandise[3]["nom"] ?></h1>
        <img src="<?= $marchandise[3]["images"]["url1"] ?>" />
        <img src="<?= $marchandise[3]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandise[3]["sizes"][0] . " " . ", , en stock" . " " . $marchandise[0]["stocks"]["S"] ?>
            </option>
            <option value="2">
                <?= "Taille : ", $marchandise[3]["sizes"][1] . " " . ", , en stock" . " " . $marchandise[0]["stocks"]["M"] ?>
            </option>
            <option value="3">
                <?= "Taille : ", $marchandise[3]["sizes"][2] . " " . ", en stock" . " " . $marchandise[0]["stocks"]["L"] ?>
            </option>
            <option value="4">
                <?= "Taille : ", $marchandise[3]["sizes"][3] . " " . ", en stock" . " " . $marchandise[0]["stocks"]["XL"] ?>
            </option>
        </select>
    </div>
    <div class="hat">
        <h1><?= $marchandise[4]["nom"] ?></h1>
        <img src="<?= $marchandise[4]["images"]["url1"] ?>" />
        <img src="<?= $marchandise[4]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandise[4]["sizes"][0] . " " . " , en stock" . " " . $marchandise[4]["stocks"]["unique"] ?>
            </option>
        </select>
    </div>
    <div class="sweat">
        <h1><?= $marchandise[5]["nom"] ?></h1>
        <img src="<?= $marchandise[5]["images"]["url1"] ?>" />
        <img src="<?= $marchandise[5]["images"]["url2"] ?>" />
        <select type="taille" id="qantité">
            <option value="1">
                <?= "Taille : ", $marchandise[5]["sizes"][0] . " " . ", en stock" . " " . $marchandise[5]["stocks"]["S"] ?>
            </option>
            <option value="2">
                <?= "Taille : ", $marchandise[5]["sizes"][1] . " " . ", en stock" . " " . $marchandise[5]["stocks"]["M"] ?>
            </option>
            <option value="3">
                <?= "Taille : ", $marchandise[5]["sizes"][2] . " " . ", en stock" . " " . $marchandise[5]["stocks"]["L"] ?>
            </option>
            <option value="4">
                <?= "Taille : ", $marchandise[5]["sizes"][3] . " " . ", en stock" . " " . $marchandise[5]["stocks"]["XL"] ?>
            </option>
        </select>
    </div>
</body>

</html>