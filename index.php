<?php $name = '猫猫的博客' ?>
<?php require_once('requires/requires.inc') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $name ?></title>
        <style>
            body {
                background-image: url('/requires/static/img/reisa_suzumi.jpg');
                background-size: cover;
                background-position: center;
                min-height: 100vh;
            }
        </style>
    </head>
    <body>
        <h1><?php echo $random_name ?></h1>
        <p>重新用PHP写了一版</p>
        <p><?php echo Index::Text ?></p>
    </body>
</html>