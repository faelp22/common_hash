<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './vendor/autoload.php';
            echo \common_hash\Libs\Bcrypt::hash('123456');
            echo '<br />';
            echo \common_hash\Libs\GenIdHash::genIdHash();
        ?>
    </body>
</html>
