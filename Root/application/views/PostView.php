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