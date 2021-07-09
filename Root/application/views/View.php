<?php
namespace application\views;

class View
{
//    private $TemplateHeaderView = 'header.php';

    function generate($ContentView, $TemplateHeaderView, $TemplateFooterView, $data = null)
    {
        include $TemplateHeaderView;
        include $ContentView;
        include $TemplateFooterView;
    }
}