<?php
class Controller_news extends Controller {

    function __construct() {
        $this->view = new View();
        $this->model = new Model_news();
    }
    
    function Action_show($number) 
    {
        $data = $this->model->curSelection($number[0]);
        if (isset($_SESSION['user']))
        {
            $this->dataView['login'] = $this->model->getView('login');
        }
        else
        {
            $this->dataView['login'] = $this->model->getView('not_login');
        }
        
        $this->dataView['comments'] = $this->model->getComments();
        $this->view->generate('news', $data, $this->dataView);
    }

}

