<?php
class Model_login extends Model {

    private $host, $dbname, $username, $password;
    
    function __construct() // попробовать перегрузить. без перегрузки - убрать
    {
        $this->host = "localhost";
        $this->dbname = "promodb";
        $this->username = "root";
        $this->password = "";
    }
 
    public function authentification()
    {
        if (!empty($_POST['login']) && !empty($_POST['password']))
        {
            $login = $_POST['login']; 
            $password = $_POST['password'];
        
            $connect = new DB($this->host, $this->dbname, $this->username, $this->password);
            $pdo = $connect->connection();

            try
            {
                $s1 = 'salt1';
                $s2 = 'salt2';
                $token = hash ('ripemd128', "$s1$password$s2");
                $query = 'SELECT * FROM users WHERE name=:name AND pass=:password LIMIT 1';
                $result = $pdo->prepare($query);
                $result->bindValue(':name', $login);
                $result->bindValue(':password', $token);
                $result->execute();
                $count = $result->rowCount();

                if ($count==1)
                {
                    // лучше использовать функцию для сохранения сессии, пароль не сохранять
                    $_SESSION['user']=$login;
                    $_SESSION['pass']=$password;
                    setcookie('login', $login, time() + 3600 * 24 * 7);
                    $_SESSION['is_authorized']=true;
                    
                }
                header('Location: http://localhost/mvc.xx/index');
            }
            catch (PDOException $e)
            {
                $error = "Ошибка при запросе " . $e->getMessage();
            }   
        }
        else
        {
        }

    }
}
