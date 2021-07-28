<?php
namespace application\views;

class View
{
    function generate($ContentView, $TemplateView, $data = null)
    {
        include $TemplateView;
    }
}