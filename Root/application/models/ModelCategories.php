<?php
namespace application\models;

use application\models\Model;
use application\models\connection\Connection;

class ModelCategories extends Model
{
    public function GetCategories(){

        $sql = "SELECT * FROM `category_title`";

        $this->model = new Connection();
        $link = $this->model->CreateConnection();

//        $result = mysqli_query($link, $sql);
        $result = $link->query($sql);

        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $categories;
    }
}
