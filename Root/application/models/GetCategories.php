<?php

function GetCategoties($link){
    $sql = "SELECT * FROM `category_title`";

//    global $link;

    $result = mysqli_query($link, $sql);

    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $categories;
}
