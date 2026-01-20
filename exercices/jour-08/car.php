<?php
$car1=new Car("peugeot",205,1990 );
$car2=new Car("renault","clio",1996 );
$car3=new Car("mercedes","classe A",2022);


class Car
{
    // propriétés ou données
    public string $brand;
    public string $model;
    public int $year;
    //méthode
    public function __construct(string $brand, string $model, int $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    //retourne l'age du véhicule
    public function getAge(){
        $age= date("Y")-$this->year;
        return $age;
    }
    
    // Retourne l'affichage demandé
    public function display()
    {
        return "{$this->brand} : {$this->model} : ({$this->getAge()} ans) ";
    }
}
echo $car1->display()."<br>";
echo $car2->display()."<br>";
echo $car3->display();