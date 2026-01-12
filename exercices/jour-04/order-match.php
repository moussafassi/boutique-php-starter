<?php
$status = "canceled";

$valeur= match ($status) {
    "standby"=>[$message="l'etat du colis est en attente. ",$color="green"],
    "validated"=>[$message= "L'etat du colis est valider. ",$color= "orange"],
    "shipped"=>[$message= "le colis est envoyer",$color= "blue"],
    "delivred"=>[$message="le colis est livrer",$color="yellow"],
    "canceled"=>[$message= "le colis est annuler", $color= "red"],

};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span style="color:<?= $color?>"> <?=  $message?></span>
</body>
</html>
