
<?php
$stock = 4;
$discount = 0;
$date = "2026-01-03";
$quantity = 5;
function isInStock($stock)
{
    if ($stock > 0) {
        return true;
    } else {
        return false;
    }
}
$verification = isInStock($stock);

print_r(json_encode($verification))."<br>";
function isOnSale($discount)
{
    if ($discount > 0) {
        return true;
    } else {
        return false;
    }
}
print_r(json_encode(isOnSale($discount)))."<br>";
function isNew($dateAdded)
{
    $timesAdded = strtotime($dateAdded);
   
    $secoundAdded = time() - $timesAdded;
   


    if ($secoundAdded < (86400 * 30)) {
        return true;
    } else {
        return false;
    }
}
print_r(json_encode(isNew($date)))."<br>";
function canOrder($stock,$quantity){
    if ($stock >= $quantity) {
        return true;
}else {
    return false;
}
}
print_r(json_encode(canOrder($stock, $quantity)))."<br>";
?>
