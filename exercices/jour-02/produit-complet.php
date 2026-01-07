<?php
$product = [
    "name" => "Pull à capuche",
    "images" =>
        [
            "url1" => "https://m.media-amazon.com/images/I/61PQ1c6Zy-L._AC_SX569_.jpg",
            "url2" => "https://www.manga-city.fr/wp-content/uploads/2021/04/SKU-9-31.jpg",
            "url3" => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSIE39eXUNYNKFDHVy5iOl66MrZpsqNHaJZiXeOgX1F-0GshzCdjwsxyqnfu4X88I7R5UkKadRpszpVZ3UlHF65je5CSG7NpP2WfeNS4e-UAlskdLZfFPhg_Q"
        ],
    "sizes" =>
        [
            "S",
            "M",
            "L",
            "XL"
        ],
    "reviews" => [
        ["author" => "Bob", "rating" => 5, "comment" => "super pull il tient chaud"],
        ["author" => "Romain", "rating" => 4, "comment" => "le dessin est top et le pull est confortable"],
        ["author" => "Anthony", "rating" => 2, "comment" => "taille trop grande"],
        // ...
    ]
];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <title><?php echo $product["name"] ?></title>
</head>

<body>
    <h1><?= $product["name"] ?></h1>
    <img src="<?= $product["images"]["url2"] ?>" />
    <p> <?= "tailles : ", $product["sizes"][0] ?></p>
    <p> <?= "tailles : ", $product["sizes"][1] ?></p>
    <p> <?= "tailles :  ", $product["sizes"][2] ?></p>
    <p> <?= "tailles : ", $product["sizes"][3] ?></p>
    <span><?= "Note du premier comentaire  : ",$product["reviews"][0]["rating"] ?></span>
</body>

</html>