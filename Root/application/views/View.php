<?php
namespace application\views;

class View
{
    function GenerateTemplate($ContentView, $TemplateView, $data = null)
    {
        include $TemplateView;
    }
}