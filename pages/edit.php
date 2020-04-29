<?php

if (!isset($_GET['id']) || (!isset($_SESSION['level'])) || (isset($_SESSION['level']) && $_SESSION['level'] < 1)) {
    header('Location: ./index.php?p=blog');
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

                    
                    if($one['par'] !== $_SESSION['email']){
                        if($_SESSION['level'] < 2 ){
                            header('Location: ./index.php?p=blog');
                            die();
                        }
                    }
                ?>
                <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 2) { ?>
                    <a href="./index.php?p=delete&id=<?= $one['id'] ?>" onclick="return confirm('Êtes vous certains de supprimer cet article ?')"><button class="btn btn-agency">Supprimer</button></a>
                <?php } ?>
                <div class="card col s12">
                    <form action="./index.php?p=edit_back" method="POST" onsubmit="checkArticle()">
                    <input type="hidden" name="id" id="id" value="<?= $one['id'] ?>">
                    <input type="hidden" name="par" id="par" value="<?= $one['par'] ?>">
                    <div class="card-title">
                        <div class="row">
                            <div class="col s12">
                                <input type="text" name="titre" id="titre" value="<?= $one['titre'] ?>">
                            </div>
                            <div class="col s12">
                                Par <input type="text" id="auteur" name="auteur" value="<?= $one['auteur'] ?>"> le <?= $one['date'] ?></input>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <textarea name="contenu" id="contenu" cols="30" rows="10"><?= $one['contenu'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s12">
                                <input type="text" name="categ" id="categ" value="<?= $one['categorie'] ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-agency">Valider l'édition</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>