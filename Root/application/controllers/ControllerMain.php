<?php
namespace Root\application\controllers\Controller_Main;

use Root\application\controllers\Controller;

class Controller_Main extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}