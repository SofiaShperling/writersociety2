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
        $result = $link->query($sql);
        $categories = $result->fetchAll();

        return $categories;
    }
}
