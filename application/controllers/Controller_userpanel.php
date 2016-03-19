<?php

class Controller_userpanel extends Controller 
{
    function __construct() 
    {
        $this->view = new View();
        $this->model = new Model_userpanel();
    }
    
    public function Action_index()
    {
        $data = array();
        $this->dataView = "";
        $this->view->generate('userpanel', $data, $this->dataView);
    }
    

}

