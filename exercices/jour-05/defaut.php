<?php
$pi = 3.14115926536;
function formatPrice(float|int $amount,  $currency = "€", $decimals = 2)
{
    $format = number_format($amount,$decimals);
    return $format." ".$currency;
}

echo formatPrice($pi),"<br>";
echo formatPrice($pi,"$"),"<br>";
echo formatPrice($pi,"€",0),"<br>";