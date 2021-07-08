<?php

namespace application\controllers;

use application\controllers\Controller;
use applications\views\View;

class ControllerMain extends Controller
{
    function ActionIndex()
    {
        $this->view->generate('MainView.php', 'TemplateView.php');
    }
}