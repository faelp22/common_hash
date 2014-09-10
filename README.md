common-hash
===========
This is Lib for generator hash bcrypt random for php 5.3.x and id

Exemplo
===========
<?php
    
    require_once './vendor/autoload.php';
            
    echo \common_hash\Bcrypt::hash('123456');
    echo '<br />';
    echo \common_hash\GenIdHash::genIdHash();
?>