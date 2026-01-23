<?php
class Category
{
    public function __construct(
        private int $id,
        private string $name
    ) {}
    
    public function getName(): string
    {
        return $this->name;
    }
        public function getSlug(): string
    {
        $result =
            strtolower(str_replace(" ", "-", $this->name));

        return $result;
    }
}