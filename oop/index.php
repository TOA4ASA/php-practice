<?php

class Product
{
    public function __construct(
        public string $name,
        public string $price,
        public int $description
    ) {
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = ucfirst($newName);
    }
}

$product1 = new Product('iphone 12', 'This is a great iPhone', 799.99);
$product2 = new product('iPhone 12 Pro', 'This is a great Pro iPhone', 999.99);
