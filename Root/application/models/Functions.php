<?php

function get_categoties($link){
    $sql = "SELECT * FROM `category_title`";

    $result = mysqli_query($link, $sql);

    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $categories;
}

$categories = get_categoties($link);