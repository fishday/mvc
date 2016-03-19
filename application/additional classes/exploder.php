<?php

class Exploder
{
    
    public static function giveMeRoutes(array $route_array)
    {
        $act_par = array();
        if (count($route_array)>4)        
        {
            $i=4;
            while ($i<count($route_array))
            {
                $act_par[] = $route_array[$i];
                $i++;
            }
        }
        return $act_par;
    }
}