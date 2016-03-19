<?php
class Singleton {

    private static $instance;
    public $a=5; 
    private function __construct() {
        
    }

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;

    }
}


