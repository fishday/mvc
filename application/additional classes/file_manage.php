<?php
class file_manage
{      
    private $avatarpath;
    private $uploadfile = array();
    
    function __construct($this->uploadfile)
    {
        $this->avatarpath = Q_PATH."/images/avatar/";
    }
    
    private function checkavatar()
    {
//        $name = $this->uploadfile ['filename']['name'];
        switch ($this->uploadfile['filename']['type'])
        {
            case 'image/jpeg': $ext = 'jpg'; break;
            case 'image/gif': $ext = 'gif'; break;
            case 'image/png': $ext = 'png'; break;
            case 'image/tiff': $ext = 'tif'; break;
            default: $ext = ''; break;
        }
        if ($ext)
        {
            $name = $this->avatarpath.username.$this->uploadfile['filename']['type']
            move_uploaded_file($uploadfile['filename']['name'], $this->avatarpath.username.$this->uploadfile['filename']['type']);
            echo "файл успешно загружен";
        }
        else
            echo "неверное расширение у файла";
    }
    
    public function avatarInDB()
    {
        
    }
}