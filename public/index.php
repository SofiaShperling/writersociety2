<?php
    require 'header.php';

//    $uri = $_SERVER['REQUEST_URI'];
//
//    if ('/' === $uri ){
//        require 'mainPage.php';
//    } elseif ('/posts' === $uri){
//        require 'posts.php';
//    } elseif ('/authors' === $uri){
//        require 'authors.php';
//    }

switch($_SERVER['REQUEST_URI'])
{
    case "/" :
        require_once("mainPage.php"); // страница "О Нас"
        break;
    case "/posts" :
        require_once("posts.php"); // страница "Контакты"
        break;
    case "/authors" :
        require_once("authors.php"); // страница "Обратная связь"
        break;
    default :
        require_once("page404.php"); // страница "404"
        break;
}


    require 'footer.php';