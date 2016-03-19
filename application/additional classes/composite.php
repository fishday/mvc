<?php
class GuaqamoleException extends Exception{}

abstract class Guaqamole
{
    private $product;
    
    function AddProduct()
    {
        throw new GuaqamoleException (get_class($this).'не юзабелен');
    }
    
    function RemoveProduct()
    {
        throw new GuaqamoleException (get_class($this).'не юзабелен');
    }
    
    abstract function WeightProduct();
}

class Product extends Guaqamole
{
    $ingridients = array();
    public function AddProduct(Guaqamole $guaqamole)
    {
        if (in_array($guaqamole, $this->ingridients, true)) 
        {
            return;
        }
        $this->ingridients[]=$guaqamole;
    }
    
    public function RemoveProduct(Guaqamole $guaqamole)
    {
        $this->ingridients[] = array_udiff($this->ingridients, array($guaqamole), 
                               function ($a,$b) {return ($a===b)?0:1;});
    }

    public function WeightProduct()
    {
        $ret=0;
        foreach ($this->ingridients as $ing)
            $ret+=$ing;
        return $ret;
    }
}

class Tomato extends Guaqamole
{   
    public function WeightProduct()
    {
        return 3;
    }
}

$gua = new Product();
$gua->AddProduct(new Tomato());
$gua2 = new Product();
$gua2->AddProduct(new Tomato());
$gua->AddProduct ($gua2);