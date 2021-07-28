<?php

namespace application\controllers;

use application\controllers\Controller;
use application\models\ModelCategories;
use application\models\ModelGetPosts;
use application\views\View;
use application\models\connection\Connection;

class ControllerHomePage extends Controller
{
    function __construct()
    {
        $this->model = new ModelCategories();
        $this->view = new View();
    }
    function ActionMain()
    {
        $data = $this->model->GetCategories();
        $this->view->GenerateTemplate(__DIR__. '/../views/MainView.php', __DIR__. '/../views/TemplateView.php', $data);
    }
}