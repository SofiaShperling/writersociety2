<?php
require_once __DIR__ . '/../models/connection/Connection.php';
require_once __DIR__ . '/../models/GetPosts.php';
?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<div id="page">
    <div id="page-bgtop">
        <div id="content">
            <?php
                $posts = GetPosts($link);
            ?>
            <?php foreach ($posts as $post): ?>
            <div class="post">
                <p class="meta">Posted by <a href="#"><?=$post['author']?></a>
                <h2 class="title"><a href="#"><?=$post['title']?></a></h2>
                <div class="entry">
                    <p><?=$post['text']?></p>
                </div>
                <div id="comments">
                    <ul>
                        <li class="likes_item"><a href="#">Likes: <?=$post['likes']?></a></li>
                        <li class="comments_item"><a href="#">Comments: <?=$post['comments']?></a></li>
                    </ul>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div id="sidebar">
            <ul>
                <li>
                    <h2>Top-5 authors</h2>
                    <ul>
                        <li><a href="#">Sofia Shperling</a></li>
                        <li><a href="#">Antonio Pablo</a></li>
                        <li><a href="#">Ivan Pablo</a></li>
                        <li><a href="#">Vasiliy Pablo</a></li>
                        <li><a href="#">Daria Antioniella</a></li>
                    </ul>
                </li>
                <li>
                    <h2>Top-5 posts</h2>
                    <ul>
                        <li><a href="#">Nec metus sed donec</a></li>
                        <li><a href="#">Magna lacus bibendum mauris</a></li>
                        <li><a href="#">Velit semper nisi molestie</a></li>
                        <li><a href="#">Eget tempor eget nonummy</a></li>
                        <li><a href="#">Nec metus sed donec</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div style="clear: both;">&nbsp;</div>
    </div>
</div>