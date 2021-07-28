<?php

namespace application\controllers;

use application\controllers\Controller;
use applications\views\View;

class ControllerPosts extends Controller
{

    function ActionMain()
    {
        $this->view->GenerateTemplate(__DIR__. '/../views/PostView.php', __DIR__. '/../views/TemplateView.php', $data);
    }
}