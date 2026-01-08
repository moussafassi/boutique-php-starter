<?php
$teams=[
    ["name"=>"Bob","age"=>"45","city"=> "Lyon","job"=> "foreur"],
    ["name"=>"Poulpe","age"=>"200","city"=> "Atlantid","job"=>"gardien"],
    ["name"=>"Robert","age"=>"50","city"=>"Paris","job"=>"programmeur" ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($teams as $team): ?>
         <li>
            <?php foreach($team as $key => $value): ?>
                 <strong><?= $key." :"?></strong><strong><?= " ".$value." "?></strong><br>

                <?php endforeach;?>
         </li>  
         <?php endforeach;?>
    </ul>
</body>
</html>