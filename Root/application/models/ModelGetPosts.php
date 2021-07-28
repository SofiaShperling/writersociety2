<?php

namespace application\models;

use application\models\connection\Connection;
use application\models\Model;

class ModelGetPosts extends Model
{
    public function GetPosts()
    {
        $sql = "SELECT * FROM `posts`";

        $this->model = new Connection();
        $link = $this->model->CreateConnection();
        $result = $link->query($sql);

        $posts = $result->fetchAll();

        return $posts;
    }
}


