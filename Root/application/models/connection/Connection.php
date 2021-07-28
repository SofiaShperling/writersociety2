<?php
namespace application\models\connection;
use PDO;

class Connection
{
    public function CreateConnection()
    {
        $user = 'root';
        $pass = 'root';
        $dsn = 'mysql:host=localhost;dbname=my_firs_base';
        try {
            $link = new PDO($dsn, $user, $pass);
        } catch (PDOException $e) {
            exit('Datebase error.');
        }

        return ($link);
    }
}