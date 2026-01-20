<?php
class BankAccount{
    private float $balance;
   

    public function  __construct(float $balance) {
       $this->balance = $balance;
 
}
public function deposit(float $amount){
if($amount<=0){
   return false;
}else{
    $this->balance += $amount;
    return true;
    
}
}
public function withdraw(float $withdrawAmount){
    
    if($this->balance<= 0 || $this->balance<$withdrawAmount || $withdrawAmount<=0){
        return false;
}else{
    $this->balance = $this->balance-$withdrawAmount;
    return true;
}
}
public function getBalance(){
    return $this->balance;
}
}