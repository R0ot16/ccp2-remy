<?php

if (!isset($_GET['id'])) {
    header('Location: ./index.php?p=blog');
}

if(isset($_COOKIE['success'])){
    $app = new app\App();
    $app->returnSuccess($_COOKIE['success']);
}

$blog = new app\Articles();
$blogs = $blog->getOneArticle($_GET['id']);
?>

<div class="row">
    <div class="container">
        <div class="col s12">
            <?php foreach ($blogs as $one) : ?>
                <?php
                    if($one['attente'] === "1" || (isset($_SESSION['level']) && $_SESSION['level'] < 1)){
                        header('Location: ./index.php?p=blog');
                        die();
                    }
                ?>
                <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 1) { ?>
                    <a href="./index.php?p=edit&id=<?= $one['id'] ?>"><button class="btn btn-agency">Editer</button></a>
                <?php } ?>
                <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 2) { ?>
                    <a href="./index.php?p=delete&id=<?= $one['id'] ?>" onclick="return confirm('Êtes vous certains de supprimer cet article ?')"><button class="btn btn-agency">Supprimer</button></a>
                <?php } ?>
                <div class="card col s12">
                    <div class="card-title">
                        <div class="row">
                            <div class="col s12">
                                <?= $one['titre'] ?>
                            </div>
                            <div class="col s12">
                                <small>Par <?= $one['auteur'] ?> le <?= $one['date'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <?= $one['contenu'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s12">
                                <span><?= $one['categorie'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>