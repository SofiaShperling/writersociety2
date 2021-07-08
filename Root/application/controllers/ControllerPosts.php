<?php


namespace application\controllers;

use application\controllers\Controller;
use applications\views\View;

class ControllerPosts extends Controller
{
    function ActionIndex()
    {
        $this->view->generate('PostsView.php', 'TemplateView.php');
    }
}