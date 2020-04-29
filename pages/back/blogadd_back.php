<?php
    if(isset($_POST['contenu'])){
        $_SESSION['article_save'] = $_POST['contenu'];
    }

    if(!isset($_POST['titre']) || !isset($_POST['auteur']) || !isset($_POST['categ']) || !isset($_POST['contenu'])){
        setcookie("error", "bx001");
        header('Location: ./index.php?p=blogadd');
        die();
    }
    $blog = new app\Articles();
    $blog->addArticle($_POST['titre'], $_POST['contenu'], $_POST['categ'], $_POST['auteur'])
?>