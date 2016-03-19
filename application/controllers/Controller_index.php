<?php
class Controller_index extends Controller {
    
    private $dataView, $newsstart, $newsfinish;
    


    function __construct() {
        $dataView = array();
        $this->view = new View();
        $this->model = new Model_index();
        
        
//        $s = new readusersettings($_SESSION['user']);
        if (isset($_SESSION['user']))
            $s = new readusersettings($_SESSION['user']);
        else
            $s = new readusersettings('defaultfile');
        //$this->newsfinish = $s->getSettings();
        //$this->newsfinish = $defConfig['news']['page_news_number'];
//        $s['news']['number'];
        $this->newsstart = 0;
        $this->newsfinish = Settings::getNewsNumber();
    }

    public function Action_index() 
    {
        $data = $this->model->newsselection($this->newsstart, $this->newsfinish);
        if (isset($_SESSION['user']))
        {
            $this->dataView['login'] = $this->model->getView('login');
        }
        else
        {
            $this->dataView['login'] = $this->model->getView('not_login');
        }
        $this->view->generate('index', $data, $this->dataView);
    }

    public function Action_Page($news_numb = array())
    {
        $this->newsstart = ($news_numb[0]-1)*5;
        $this->newsfinish = $news_numb[0]*5;
        $data = $this->model->newsselection($this->newsstart, $this->newsfinish);
        $this->dataView['login'] = $this->model->getView('login');
        $this->view->generate('index', $data, $this->dataView);
    }

}