
<?php
$firstNames = ["Priscilla", "Lilo", "Romain", "Dylan", "Ayoub"];
$i=1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul><?php foreach ($firstNames as $firstName):?>
    
        <li><?= $i.". " . $firstName ?></li>
        <?php $i  ++ ;?>
        <?php endforeach;?>

    </ul>

</body>

</html>