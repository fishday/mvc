<?php
class DB
{
    private $host, $dbname, $username, $password, $charset;
    
    function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $this->charset = 'utf8';

    }
    
    public function connection()
    {
/*        try
        {
            $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec('SET NAMES "utf8"');
            return $pdo;
        }
        catch (PDOException $e)
        {
            $output = 'соединение не установлено' . $e->getMessage();
            return $output;
        }*/
        
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";
        $opt = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $pdo = new PDO($dsn, $this->username, $this->password, $opt);
        return $pdo;
    }   
    
}