<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Writer Society</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href=".../css/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div id="logo">
    <h1><a href="/">Writer Society</a></h1>
</div>
<div id="header-wrapper">
    <div id="header">
        <div id="menu">
            <ul>
                <?php foreach ($data as $category):
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
<?php include $ContentView; ?>
<footer>
    <div id="footer">
        <p>Сайт, где пользователи могут делиться своим произведениями, читать других авторов и обсуждать посты в комментариях.
            since 2021</p>
    </div>
</footer>
</body>
</html>>