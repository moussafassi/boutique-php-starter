<?php
require("Category.php");
require("Product.php");
$clothes = new Category(1, "Vêtements");
$materiel = new Category(2,"APPAREIL MENAGER");
$loisir = new Category(3,"CONSOLE DE JEU");
$tshirt = new Product("T-shirt", 29.99, $clothes);
$dishwasher = new Product("LAVE VAISSELLE",856.32, $materiel);
$shoes = new Product("NIKE AIR JORDAN",89.45, $clothes);
$gameConsole = new Product("PLAYSTAION 5",499.99, $loisir);



echo $dishwasher->getCategory()->getSlug()." ".$dishwasher->getPrice();
echo"<br>";
echo $gameConsole->getSlug()." ".$gameConsole->getPrice()." ".$gameConsole->getCategory()->getName();