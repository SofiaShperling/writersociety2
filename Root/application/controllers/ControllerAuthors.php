<?php

namespace application\controllers;

use application\controllers\Controller;
use applications\views\View;

class ControllerAuthors extends Controller
{
    function ActionMain()
    {
        $this->view->generate('AuthorsView.php', 'header.php', 'footer.php');
    }
}