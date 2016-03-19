<?php
class readusersettings {
    
    //private $defaultfile = Q_PATH.'settings/users/defaultfile.ini';
    
    private $filename;
    private $usingfile;

    function __construct($username) {
        $this->filename = Q_PATH.'/settings/users/'.$username.'.ini';
        if (file_exists($this->filename))
        {
            $this->usingfile = $this->filename;
        }
        else
        {
            $this->usingfile = Q_PATH.'/settings/users/defaultfile.ini';
        }
    }

    public function getSettings()
    {
        $zu = parse_ini_file($this->usingfile, true);
        return $zu['news']['page_news_number'];
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

