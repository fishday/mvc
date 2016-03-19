<?php
    class View {

        function __construct() {
    }
    
    public function generate($template, $data=array(), $dataView=array()) {
        include Q_PATH.'/application/views/Template_'.$template.'.php';
    }
    

}
