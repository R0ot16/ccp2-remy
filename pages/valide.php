<?php
    if(!isset($_GET['valide']) || !isset($_SESSION['level'])){
        header('Location: ./index.php');
        die();
    }

    $valide = intval($_GET['valide']);

    $blog = new app\Articles();
    $blog->valideArticle($_GET['id'], $valide);
?>