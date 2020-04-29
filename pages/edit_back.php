<?php

if(!isset($_POST['id']) || !isset($_SESSION['level'])){
    header('Location: ./index.php?p=blog');
    die();
}

if(!isset($_POST['titre']) || !isset($_POST['contenu']) || !isset($_POST['categ']) || !isset($_POST['auteur'])){
    setcookie('error', "ex001");
    header('Location: ./index.php?p=edit&id='.$_POST['id']);
    die();
}

if($_SESSION['level'] < 1){
    header('Location: ./index.php?p=blog');
    die();
}
if($_POST['par'] !== $_SESSION['email'] && $_SESSION['level'] < 2){
    header('Location: ./index.php?p=blog');
    die();
}

$article = new app\Articles();

$article->editArticle($_POST['id'], $_POST['titre'], $_POST['contenu'], $_POST['categ'], $_POST['auteur']);