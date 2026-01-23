<?php
class Category
{
    public int $id;
    public string $name;
    public string $description;
    public function __construct(int $id, string $name, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
    public function getSlug(): string
    {
        $result =$this->name;
            //strtolower(str_replace(" ", "-", $this->name));

        return "bonjour".$result;
    }

    // $name= electronic pour PC
    // slug = electronic-pour-pc
    // "electronic pour PC" => "electronic-pour-pc"
    // "electronic-pour-pc" = strtolower(str_replace(" ", "-", "electronic pour PC"));
}


// 1 creer une instance de cat.
$c=new Category("1","ELECTRONIC PC","CARTE MERE");
// 2 afficher result getSlug
echo $c->getSlug();