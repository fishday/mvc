<?php
class Controller_404 extends Controller {

/*        function __construct() {
        
    }*/
    
    public function Action_index() {
        $this->view->generate('404', '404');
    }

}