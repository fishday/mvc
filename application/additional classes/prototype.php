<?php
class Shop
{
    private $smarket;
    function __construct (Supermarket $sup)
    {
        $this->smarket = $sup;
    }
    
    public function getShop()
    {
        return clone $this->smarket;
    }
}

class Supermarket
{
    public function __construct()
    {
        
    }
    
    public function selling()
    {
        
    }
}

class RusSupermarket extends Supermarket
{
    
}

class AmerSupermarket extends Supermarket
{
}

$shop = new Shop(new RusSupermarket());
shop->getShop();