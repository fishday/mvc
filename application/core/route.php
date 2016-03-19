<?php
    class Route {
        function __construct() {
    }
    
    public static function Start() {
/*        $controller_name = 'index';
        $action_name = 'index';
        $act_par = array();
        
        session_start();
        if (isset($_COOKIE['login']))
        {
            $_SESSION['user']=$_COOKIE['login'];
        }
        
        
        //строка запроса в массив       
        $route_array = explode('/', $_SERVER['REQUEST_URI']);

        if($route_array[2]=="?XDEBUG_SESSION_START=netbeans-xdebug")  // для отладки
            $route_array[2]="";
        
        if (!empty($route_array[2])) {
            $controller_name = $route_array[2];
        }
        
        if (!empty($route_array[3])) {
            $action_name = $route_array[3];
        }

        //Префиксы
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'Action_'.$action_name;
        
        
        if (file_exists(Q_PATH.'/application/models/'.$model_name.'.php')) {
            include Q_PATH.'/application/models/'.$model_name.'.php';
        }
            
        if (file_exists(Q_PATH.'/application/controllers/'.$controller_name.'.php')) {
            include Q_PATH.'/application/controllers/'.$controller_name.'.php';
        }       
        else {
            header('Location: http://localhost/mvc.xx/404/');
            exit;
        }
        $controller = new $controller_name();        
        $controller->$action_name($act_par);*/
        
        
        
        $settings = new Settings();
        $defConfig = $settings->getConfig();

        $defSetting = Settings::getSettings();
        
        session_start();
        if (isset($_COOKIE['login']))
        {
            $_SESSION['user']=$_COOKIE['login'];
            $rus = new readusersettings($_SESSION['user']);
            Settings::set_news_number($rus->getSettings());
        }
        else Settings::set_news_number(5);
        
        
        //строка запроса в массив       
        $route_array = explode('/', $_SERVER['REQUEST_URI']);
        
        $mp = new main_page();
        $mp->Begin ($defConfig, $route_array);

    }
}