<?php
class main_page
{
    private $route;
    
    function __construct ()
    {
    }
    
    private function calculation($defConfig, $route_array)
    {
        $route = array();
        if($route_array[2]=="?XDEBUG_SESSION_START=netbeans-xdebug")  // для тестирования
            $route_array[2]="";
        
        if (!empty($route_array[2]))
            $controller_name = $route_array[2];
        else
            $controller_name = $defConfig['app']['news']['def_controller'];
        
        if (!empty($route_array[3]))
            $action_name = $route_array[3];
        else
            $action_name = $defConfig['app']['news']['def_action'];
        
        $act_par = Exploder::giveMeRoutes($route_array);
        $rout_out = array ('controller_name' => $controller_name,
                           'model_name' => $controller_name,
                           'action_name' => $action_name,
                           'act_par' => $act_par
                          );
        return $rout_out;
    }
    
    private function check_route($route_in)
    {
        if (file_exists(Q_PATH.'/application/models/Model_'.$route_in['model_name'].'.php')) {
            include Q_PATH.'/application/models/Model_'.$route_in['model_name'].'.php';
//            return $route_in;
        }
        else
            return -1;
            
        if (file_exists(Q_PATH.'/application/controllers/Controller_'.$route_in['controller_name'].'.php')) {
            include Q_PATH.'/application/controllers/Controller_'.$route_in['controller_name'].'.php';
            return $route_in;
        }
        else {
            return -1;
        }

    }
    
    public function Begin($defConfig, $route_array)
    {
        $action = $this->check_route($this->calculation($defConfig, $route_array));
        if ($action!==-1)
        {
            $controller_name = 'Controller_'.$action['controller_name'];
            $action_name = 'Action_'.$action['action_name'];
            $act_par = $action['act_par'];
            $controller = new $controller_name();
            $controller->$action_name($action['act_par']);
/*
            $act = $action['action_name']
            if (method_exists($controller, $act)) {
                $controller->$action($action['act_par']);*/
        }
        else
//            header('Location: http://localhost/mvc.xx/'.$defConfig['app']['news']['no_found'].'/');*/
            header('Location: http://localhost/mvc.xx/404');
    }
}