<?php
$age=25;
if($age<18){
    echo "mineur";
} else if($age>=18 && $age<=25){
    echo "jeune adulte";
} else if($age>= 26&& $age<= 64){
    echo"adulte";
}else{
    echo"senior";
}