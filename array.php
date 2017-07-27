<?php
    $links = [
        "google"=>"http://google.com",        
        "yandex"=>"http://yandex.ru",  
        "habr"=>"http://habrahabr.ru"
    ];
    $links = array_flip($links);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <ul class="nav">
            <?php foreach($links as $key=>$value): ?>
            
            <li><a href="<?=$key?>"><?=$value?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </body>
</html>