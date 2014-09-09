<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Commom_hash V-0.0.1</title>
    </head>
    <body>
        <?php
            if(file_exists('./vendor/autoload.php')):
                require_once './vendor/autoload.php';
            else:
                require_once dirname(dirname(__DIR__)).'/autoload.php';
            endif;
            
            echo \common_hash\Libs\Bcrypt::hash('123456');
            echo '<br />';
            echo \common_hash\Libs\GenIdHash::genIdHash();
        ?>
    </body>
</html>
