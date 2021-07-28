<?php

namespace application\controllers;

use application\controllers\Controller;
use applications\views\View;

class ControllerPosts extends Controller
{

    function ActionMain()
    {
        $this->view->generate('PostView.php', 'header.php', $data);
    }
}