<?php

namespace application\controllers;

use application\controllers\Controller;
use application\models\ModelCategories;
use applications\views\View;
use application\models\connection\Connection;

class ControllerHomePage extends Controller
{
    function __construct()
    {
        $this->model = new ModelCategories();
//        $this->view = new View();
    }
    function ActionMain()
    {
        $data = $this->model->GetCategories();
        $this->view->generate('MainView.php', 'header.php', 'footer.php', $data);
    }
}