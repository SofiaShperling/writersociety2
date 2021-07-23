<?php

function GetPosts($link)
{
    $sql = "SELECT * FROM `posts`";

    $result = mysqli_query($link, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}
