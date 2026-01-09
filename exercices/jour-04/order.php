<?php
$status = "standby";

switch ($status) {
    case "standby":
        $message="Etat du colis est ";
        $color="green";
        break;
    case "validated":
        $message= "Etat du colis est ";
        $color="orange";
        break;
    case "shipped":
        $message="Etat du colis est ";
         $color="blue";
        break;
    case "delivered":
        $message="Etat du colis est ";
         $color="yellow";
        break;
    case "canceled":
        $message="Etat du colis est ";
         $color="red";
        break;
}
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