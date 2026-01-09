<pre>
<?php
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";

// Compare $a avec $b, $c, $d, $e en utilisant == puis ===
// Utilise var_dump() pour chaque comparaison
var_dump($a ==$b);//false
var_dump($a ==$c);//true
var_dump($a ==$d);//true
var_dump($a ==$e);//true
 echo" ";
var_dump($a ===$b);//false
var_dump($a ===$c);//false
var_dump($a ===$d);//false
var_dump($a ===$e);//false
echo" ";
var_dump($b == $c);//true
var_dump($b == $d);//true
var_dump($b==$e);//false
echo" ";
var_dump($b === $c);//false
var_dump($b === $d);//false
var_dump($b === $e);//false
echo " ";
var_dump($c == $d);//true
var_dump($c == $e);//false
echo " ";
var_dump($c === $d);//false
var_dump($c === $e);//false
echo " ";
var_dump($d == $e);//true
echo " ";
var_dump($d === $e);//false
?>
</pre>