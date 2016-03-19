<?php
namespace magicka;
class magic {

    protected $zimbo=100;
    
    function __construct() {
        
    }

    function __get($property)
    {
        return $this->$property;
    }
    
    function __set($property, $newproperty)
    {
        $this->$property=$newproperty;
    }
}