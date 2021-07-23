<?php

namespace application\controllers;

use application\controllers\Controller;
use applications\views\View;

class ControllerPosts extends Controller
{

    function ActionMain()
    {
        $this->view->generate('PostsView.php', 'header.php', 'footer.php');
    }
}