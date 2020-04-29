<?php

if (!isset($_SESSION['email'])) {
    header('Location: ./index.php');
}

$article = new app\Articles();

$articles = $article->getMyArticle();
?>
<div class="row">
    <div class="container">
        <?php foreach ($articles as $one) : ?>
            <div class="card col s12 m12 l8">
                <div class="card-title">
                    <div class="row">
                        <div class="col s12">
                            <?= $one['titre'] ?>
                        </div>
                        <div class="col s12">
                            <small>Par <?= $one['auteur'] ?> le <?= $one['date'] ?></small>
                            <div class="right">
                                <?=  $article->getStatusArticle($one['id']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <span class="truncate"><?= $one['contenu'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col s12">
                            <a href="./index.php?p=single&id=<?= $one['id'] ?>"><button class="btn btn-agency">Lire la suite</button></a>
                            <div class="right">
                                <span><?= $one['categorie'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>