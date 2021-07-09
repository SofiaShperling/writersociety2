<?php
namespace application\views;

class View
{
    private $TemplateView = 'TemplateView.php';

    function generate($ContentView, $TemplateView, $data = null)
    {
        include $TemplateView;
        include $ContentView;
    }
}