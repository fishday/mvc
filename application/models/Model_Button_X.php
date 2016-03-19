<?php
use \magicka\magic;
class Model_Button_X extends Model {

    function __construct() {

    }
    
    public function getData()
    {
        return 600;
    }
    
    public function useinifile()
    {
        $filename = Q_PATH.'/settings/admin.ini';
        include Q_PATH.'/application/additional classes/singleton class.php';
        include Q_PATH.'/application/additional classes/magic.php';
        include Q_PATH.'/application/additional classes/WorkWithArray.php';
        $v = Singleton::getInstance();
        //echo $v->a.'<br>';
        $mag = new magic();
        $mag->zimbo = 10;
        //echo $mag->zimbo.'<br>';
        
        $WWA = new WorkWithArray();
        $WWA->setArray(20);
        $WWA->setArray(30);
        $WWA->setArray(20);
        $WWA->setArray(30);

        $zaga=$WWA->getArray();
        foreach ($zaga as $za)
            echo $za.'<br>';
        echo '<br>'.'<br>';
        unset($zaga[2]);
        foreach ($zaga as $za)
            echo $za.'<br>';
/*        $iniarray = parse_ini_file($filename, true);
        echo $iniarray['n']['x'];*/
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

