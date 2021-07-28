<link rel="stylesheet" type="text/css" href="style.css"/>
<div id="page">
    <div id="page-bgtop">
        <div id="content">
            <?php
            foreach ($posts as $post):
            include __DIR__ . '/PostView.php';
            endforeach;
            ?>
        </div>
        <div id="sidebar">
            <ul>
                <li>
                    <h2>Top-5 authors</h2>
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            include __DIR__ . '/AuthorInListView.php';
                        }
                        ?>
                    </ul>
                </li>
                <li>
                    <h2>Top-5 posts</h2>
                    <ul>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            include __DIR__ . '/PostInListView.php';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div style="clear: both;">&nbsp;</div>
    </div>
</div>