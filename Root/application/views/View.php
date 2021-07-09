<?php
namespace application\views;

class View
{
    private $TemplateView = 'TemplateView.php';

    function generate($ContentView, $TemplateView, $data = null)
    {
//        var_dump('application/views/' . $TemplateView);
        include $TemplateView;
        include $ContentView;
    }
}