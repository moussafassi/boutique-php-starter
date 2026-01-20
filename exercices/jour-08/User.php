<?php

class User
{
    public string $name;
    public string $email;
    public DateTime $registrationDate;
    public function __construct(string $name, string $email, DateTime $registrationDate = null)
    {
        $this->name = $name;
        $this->email = $email;
        //operation ternaire
        $this->registrationDate = $registrationDate ? $registrationDate : new DateTime();
    }
    public function display()
    {
        return "{$this->name} {$this->email} {$this->registrationDate->format("Y-m-d")}";
    }

    public function isNewMember()
    {
        $now = new DateTime();
        $diff =$now->diff($this->registrationDate);
       return $diff->days<30;
    }

}
$personne1 = new User("bob", "putrr@pi.com");
$personne2 = new User("joe", "reygiydg@gfyf.com", new DateTime("2025-01-01"));

echo $personne1->display() . "<br>";
echo $personne2->display()."<br>";
echo "Personne1 est nouveau membre ? " . ($personne1->isNewMember() ? "Oui" : "Non") . "<br>";
echo "Personne2 est nouveau membre ? " . ($personne2->isNewMember() ? "Oui" : "Non") . "<br>";
