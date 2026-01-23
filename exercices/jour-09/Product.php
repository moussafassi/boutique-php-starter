<?php
class Product
{
    public function __construct(
        private string $name,
        private float $price,
        private Category $category // Relation !
    ) {}
    
    public function getCategory(): Category
    {
        return $this->category;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
  
          public function getSlug(): string
    {
        $result =
            strtolower(str_replace(" ", "-", $this->name));

        return $result;
    }

}
    