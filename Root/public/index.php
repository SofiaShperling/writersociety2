<?php
    require 'header.php';

    $uri = $_SERVER['REQUEST_URI'];

    if ('/' === $uri ){
        require 'mainPage.php';
    } elseif ('/posts' === $uri){
        require 'posts.php';
    } elseif ('/authors' === $uri){
        require 'authors.php';
    }

    require 'footer.php';