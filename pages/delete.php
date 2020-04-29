<?php

if(!isset($_GET['id'])){
    header('Location: ./index.php?p=blog');
}

$art = new app\Articles();
$art->deleteArticle($_GET['id']);