<?php
    require_once __DIR__. '/../models/include/database.php';
    require_once __DIR__ . '/../models/GetCategories.php';
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>Writer Society</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link href=".../css/style.css" rel="stylesheet" type="text/css" media="screen"/>
<div id="logo">
    <h1><a href="/">Writer Society</a></h1>
</div>
<div id="header-wrapper">
    <div id="header">
        <div id="menu">
            <ul>
                <?php $categories = GetCategoties($link); ?>
                <?php foreach ($categories as $category):
                    $categorylink = $category["title"];
                    if ($category["title"] == 'main'){
                        $categorylink = '';
                    }
                ?>
                    <li><a href="/<?=$categorylink?>"><?=$category["title"]?></a></li>
                <?php endforeach; ?>
                <li class="current_page_item"><a href="#"> log in / check in </a></li>
            </ul>
        </div>
    </div>
</div>