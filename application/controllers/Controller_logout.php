<?php
class Controller_logout extends Controller {

    function __construct() {
    }

    public function Action_index()
    {
        session_unset(); 
        session_destroy();
        setcookie('login','');
        header('location: http://localhost/mvc.xx');
    }

}

