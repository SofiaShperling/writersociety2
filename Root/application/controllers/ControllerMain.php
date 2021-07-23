<?php

namespace application\controllers;

use application\controllers\Controller;
use applications\views\View;

class ControllerMain extends Controller
{
    function ActionMain()
    {
        $this->view->generate('MainView.php', 'header.php', 'footer.php');
    }
}