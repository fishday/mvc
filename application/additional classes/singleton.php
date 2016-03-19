<?php
class singleton
{
    private static $instance;
    private $option;
    
    private function __construct()
    {
    }
    
    public static function create()
    {
        if empty (self::$instance)
            self::$instance = new singleton();
        return self::$instance;
    }
    
    public function getOption()
    {
        return $this->option;
    }
    
    public function setOption($property)
    {
        $this->option = $property;
    }
}