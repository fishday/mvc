<?php
class Controller_Button_X extends Controller {
    private $dataView;

    function __construct() {
        $this->view = new View();
        $this->model = new Model_Button_X();
    }
    
    function Action_index() 
    {
        $data = array();
        //$this->model->useinifile();
        $this->view->generate('Button_X', $data, $this->dataView);
/*        $data = $this->model->getData();
        $this->view->generate('Button_X', $data);*/
        
    }

}

