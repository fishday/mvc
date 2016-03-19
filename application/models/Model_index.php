<?php
class Model_index extends Model 
{
    private $host, $dbname, $username, $password;
    
    function __construct() // попоробовать перегрузить. без перегрузки - убрать
    {
        $this->host = "localhost";
        $this->dbname = "promodb";
        $this->username = "root";
        $this->password = "";
    }
    
    private function newsresult()
    {
        $connect = new DB($this->host, $this->dbname, $this->username, $this->password);
        $pdo = $connect->connection();
        try
        {
            $querysel = "SELECT * FROM newtable order by ndate desc";
            $result = $pdo->query($querysel);
            while ($row=$result->fetch())
            {
                $arnews[] = array('id' => $row['id'], 'ntext' => $row['ntext'], 'author' => $row['author'], 'ndate' => $row['ndate'], 'newsheader' => $row['newsheader'], 'img'=>$row['IMG']);
            }
            return $arnews;

        }
        catch (PDOException $e)
        {
            $error = "Ошибка при запросе " . $e->getMessage();
        }   
        
    }
        
    public function newsselection($nstart, $nfinish)
    {
        $arnews = $this->newsresult();
        $i=$nstart;
        while (($i<$nfinish) && ($i<count($arnews)))
        {
            $output[] = $arnews[$i];
            $i++;
        }
        return $output;
    }
    
    public function getView($view)
    {
        return Q_PATH.'/application/views/View_'.$view.'.php';
    }
    
}