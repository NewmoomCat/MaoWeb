<?php (string) $name = '猫猫的博客' ?>
<?php require_once('requires/requires.inc') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo($name) ?></title>
        <link rel="stylesheet" href="/requires/static/css/style.css">
    </head>
    <body>
        <div class="terminal-window">
            <div class="window-header">
                <span class="window-title">Alacritt</span>
            </div>
            <div class="window-body">
                <h1><?php echo($random_name) ?></h1>
                <p>重新用PHP写了一版</p>
                <p><?php echo(Index::Text) ?></p>
                <ul>
                    <h4>文章列表</h4>
                    <li>
                        <a href="post.php?page=1"><?php echo($b1_name) ?></a><br>
                    </li>
                    <li>
                        <a href="post.php?page=2"><?php echo($b2_name) ?></a><br>
                    </li>
                    <li>
                        <a href="post.php?page=3"><?php echo($about_me) ?></a>
                    </li>
                </ul>
                <br>
                <p>[root@archlinux ~]$</p>
            </div>
            <div class="righter">
                &copy; 2026 XinYueNeko
            </div>
        </div>
    </body>
</html>