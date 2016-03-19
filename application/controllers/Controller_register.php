<?php
class Controller_register extends Controller {

        function __construct() {
            $dataView = array();
            $this->view = new View();
            $this->model = new Model_register();       
    }
    
    public function Action_index()
    {
        if (!empty($_POST['lg']) && !empty($_POST['pw']) && !empty($_POST['confirmpw']) && !empty($_POST['email']))
        {
            if ($this->model->validator($_POST['lg'], $_POST['pw'], $_POST['confirmpw'], $_POST['email'])=="")
            {                    
                $this->model->insertuser($_POST['lg'], $_POST['pw'], $_POST['email']);
                header('Location: http://localhost/mvc.xx');
            }
            else
                echo "херотеня";
        }
        else
        {
            $data = array();
            $this->dataView = array();
            $this->view->generate('register', $data, $this->dataView);
        }
    }

}