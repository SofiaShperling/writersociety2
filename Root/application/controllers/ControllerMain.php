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

    function ActionAuthors()
    {
        $this->view->generate('AuthorsView.php', 'header.php', 'footer.php');
    }

    function ActionPosts()
    {
        $this->view->generate('PostsView.php', 'header.php', 'footer.php');
    }
}