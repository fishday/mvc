<?php
class Settings {
    
    private $conf;
    private static $con;
    
    function __construct() {
        $this->conf=array(
            'app'=>array(
                'news'=>array(
                    'language' => 'ru',
                    'template_dir' => 'default',
                    'routing'=>array(
                        'index'=>'index/index',
                        '404'=>'404/index'
                    ),
                    'no_found'=>'404',
                    'start_page'=>'index',
                    'def_controller'=>'index',
                    'def_action'=>'index',
                    'deg_param'=>''                    
                ),
                'site'=>array(
                    'language' => 'ru',
                    'template_dir' => 'default',
                    'routing'=>array(
                        'index'=>'index/index',
                        '404'=>'404/index',
                        'book/<name>|^[a-z]+$|i/<action>|^[a-z]+$|i/<:p>|^[0-9]+$|i/<!:id>|^[0-9]+$|i/<:q>' => 'book/<action>/<name>/<action>',
                        'blog' => 'blog/index',
                        'blog/add' => 'blog/add',
                        'blog/<id>|^[0-9]+$|i' => 'blog/view/<id>'
                    ),
                    'no_found'=>'404',
                    'start_page'=>'index'
                ),
            ),
            'db'=>array(
                'db_driver' => 'pdo',
                'db_host'=>'localhost',
                'db_port'=>'',
                'db_name'=>'promodb',
                'db_login'=>'root',
                'db_pass'=>'',
                'db_type'=>'mysql',
                'db_charset' => 'utf8'
            ),
            'user'=>array(
                'page_news_number' => ''
            ),
        );
    }
    
    public static function getSettings()
    {
        self::$con=array(
            'app'=>array(
                'news'=>array(
                    'language' => 'ru',
                    'template_dir' => 'default',
                    'routing'=>array(
                        'index'=>'index/index',
                        '404'=>'404/index'
                    ),
                    'no_found'=>'404',
                    'start_page'=>'index',
                    'def_controller'=>'index',
                    'def_action'=>'index',
                    'deg_param'=>''                    
                ),
                'site'=>array(
                    'language' => 'ru',
                    'template_dir' => 'default',
                    'routing'=>array(
                        'index'=>'index/index',
                        '404'=>'404/index',
                        'book/<name>|^[a-z]+$|i/<action>|^[a-z]+$|i/<:p>|^[0-9]+$|i/<!:id>|^[0-9]+$|i/<:q>' => 'book/<action>/<name>/<action>',
                        'blog' => 'blog/index',
                        'blog/add' => 'blog/add',
                        'blog/<id>|^[0-9]+$|i' => 'blog/view/<id>'
                    ),
                    'no_found'=>'404',
                    'start_page'=>'index'
                ),
            ),
            'db'=>array(
                'db_driver' => 'pdo',
                'db_host'=>'localhost',
                'db_port'=>'',
                'db_name'=>'promodb',
                'db_login'=>'root',
                'db_pass'=>'',
                'db_type'=>'mysql',
                'db_charset' => 'utf8'
            ),
            'user'=>array(
                'page_news_number' => ''
            ),
        );
    }
    
    public static function getNewsNumber()
    {
        return self::$con['user']['page_news_number'];
    }
    
    public static function set_news_number($number)
    {
        self::$con['user']['page_news_number'] = $number;
    }

        public function getConfig()
    {
        return $this->conf;
    }
}
