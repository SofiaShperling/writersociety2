<?php
namespace applications\views;

class View
{
    private $templateView;

    function generate($contentView, $templateView, $data = null)
    {
        include 'application/views/' . $templateView;
    }
}