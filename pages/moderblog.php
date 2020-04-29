<?php
    $blog = new app\Articles();
    $blogs = $blog->getAllArticlesAttente();

    if(isset($_COOKIE['success'])){
        $app = new app\App();
        $app->returnSuccess($_COOKIE['success']);
    }
?>
<div class="row">
    <div class="container">
        <div class="col s12">
            <?php foreach ($blogs as $one) : ?>
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
                                <span class="truncate"><?= $one['contenu'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s12">
                                <a href="./index.php?p=single&id=<?= $one['id'] ?>"><button class="btn btn-agency">Lire la suite</button></a>
                                <a href="./index.php?p=valide&valide=1&id=<?= $one['id'] ?>"><button class="btn btn-agency">Valider</button></a>
                                <a href="./index.php?p=valide&valide=0&id=<?= $one['id'] ?>"><button class="btn btn-agency">Refuser</button></a>
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
</div>