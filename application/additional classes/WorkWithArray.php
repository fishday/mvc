<?php
class WorkWithArray {

    private $testarray = array();
    function __construct() {
        
    }
    
    public function setArray($inpdata)
    {
        $this->testarray[] = $inpdata;
    }
    
    public function getArray()
    {
        return $this->testarray;
    }
    
    


}