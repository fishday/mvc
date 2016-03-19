<?php
class Controller_login extends Controller
{

    function __construct() {
        $this->view = new View();
        $this->model = new Model_login();
    }
    
    public function Action_index()
    {
        $this->model->authentification();
    }

}
