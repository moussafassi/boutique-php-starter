<pre>
<?php
$groceries = array("pomme" , "banane" ," fraise" ,"pêche" , "abricot");
echo $groceries[0];
echo $groceries[count($groceries)-1];
echo count($groceries);
$groceries []= "mangue";
$groceries[]= "kiwi";
var_dump($groceries);
unset($groceries[2]);
var_dump($groceries);
?>
</pre>