<?php
namespace application\models\connection;

class Connection
{
    public function CreateConnection()
    {
//        $link = mysqli_connect('localhost','root', 'root', 'my_firs_base');
        $user = 'root';
        $pass = 'root';
        $dsn = 'mysql:host=localhost;dbname=my_firs_base';
        $link = new PDO($dsn, $user, $pass);
        if (mysqli_connect_errno()) {
            echo 'Error to connect to database (' . mysqli_connect_errno() . '): ' . mysqli_connect_error();
            exit();
        }
        return ($link);
    }
}