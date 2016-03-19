<?php
class Model_news extends Model 
{
    private $host, $dbname, $username, $password;
    
    function __construct() // попоробовать перегрузить. без перегрузки - убрать
    {
        $this->host = "localhost";
        $this->dbname = "promodb";
        $this->username = "root";
        $this->password = "";
    }
    
    public function curSelection($number)
    {
        $connect = new DB($this->host, $this->dbname, $this->username, $this->password);
        $pdo = $connect->connection();
        try
        {
//            $querysql = 'SELECT * FROM newtable WHERE id = "'.$number.'" LIMIT 1;';
            $querysql = 'SELECT * FROM newtable WHERE id = "'.$number.'" LIMIT 1;';
            $result = $pdo->query($querysql);
            $row = $result->fetch(); //надо как-то выбрать единственный массив
            return $row;
        }
        catch (PDOException $e)
        {
            return FALSE;
        }
        
    }
    
    public function getView($view)
    {
        return Q_PATH.'/application/views/View_'.$view.'.php';
    }

    public function getComments()
    {
        $connect = new DB($this->host, $this->dbname, $this->username, $this->password);
        $pdo = $connect->connection();
        try
        {
            $query = "SELECT c.textcomment, u.avatar FROM comments c, users u WHERE c.idauthor = u.id";
            $result = $pdo->query($query);
            while ($row=$result->fetch())
            {
                $arcomm[] = array('textcomment' => $row['textcomment'], 'avatar' => $row['avatar']);
            }
            return $arcomm;

        }
        catch (PDOException $e)
        {
            $error = "Ошибка при запросе " . $e->getMessage();
        }   
    }

}