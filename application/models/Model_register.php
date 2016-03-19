<?php

class Model_register extends Model 
{
    private $host, $dbname, $username, $password;

    function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "promodb";
        $this->username = "root";
        $this->password = "";
    }
    
    public function insertuser($name, $pass, $email)
    {
        $s1 = "salt1";
        $s2 = "salt2";
        $token = hash ('ripemd128', "$s1$pass$s2");
        $connect = new DB($this->host, $this->dbname, $this->username, $this->password);
        $pdo = $connect->connection();
        try
        {
            $query = "INSERT INTO users SET name=:name, pass=:pass, email=:email";
            $result = $pdo->prepare($query);
            $result->bindValue(':name', $name);
            $result->bindValue(':pass', $token);
            $result->bindValue(':email', $email);
            $result->execute();
        }
        catch (PDOException $e)
        {
            $error = "Ошибка при запросе " . $e->getMessage();
        }
    }
    
    public function validator($name, $pass, $confirmpass, $email)
    {
        $fail = "";
        $fail .= $this->valUsername($name);
        $fail .= $this->valPassword($pass);
        $fail .= $this->valConfirmPassword($pass, $confirmpass);
        $fail .= $this->valEmail($email);
        return $fail;
    }
    
    private function valUsername($field)
    {
        if (strlen($field)<4)
        {
            return "Имя пользователя не может содержать меньше 4 символов \n";
        }
        else if (preg_match("/^[a-zA-Z]+$/", $field))
            return "";
        else
            return "Имя пользователя должно содержать только латинские буквы \n";
    }
    
    private function valPassword($field)
    {
        if (strlen($field)<4)
        {
            return "Пароль не может содержать меньше 4 символов \n";
        }
        else if (preg_match("/[a-z]+/", $field) && preg_match("/[A-Z]+/", $field) && preg_match("/\d+/", $field))
            return "";
        else
            return "Пароль должен содержать строчную букву, прописную и цифру \n";
    }
    
    private function valConfirmPassword($fieldpw, $fieldconfirm)
    {
        if ($fieldpw===$fieldconfirm)
            return "";
        else
            return "ПОДТВЕРДИТЕ ПАРОЛЬ \n";
    }
    
    private function valEmail($field)
    {
        if (preg_match("/^[\w\.\-]+@([\w\-]+\.)+[a-z]+$/i", $field))
            return "";
        else return "ВВЕДИТЕ СУЩЕСТВУЮЩУЮ ПОЧТУ \n";
    }
}