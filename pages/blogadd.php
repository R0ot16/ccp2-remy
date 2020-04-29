<?php
if (!isset($_SESSION['level']) || (isset($_SESSION['level']) && $_SESSION['level'] <= 0)) {
    header('Location: ./index.php');
    die();
}

if(isset($_COOKIE['error'])){
    $app = new app\App();

    $app->returnError($_COOKIE['error']);
}
?>
<div class="row">
    <div class="container">
        <div class="card">
            <div class="card-title">
                <h4>Nouvel article</h4>
            </div>
        </div>
        <div class="card-content">
            <form action="./index.php?p=blogadd_back" class="col s12" method="POST" onsubmit="return checkArticle()">
                <div class="input-field col s12">
                    <input type="text" name="titre" id="titre" placeholder="Titre de l'article..">
                    <label for="titre">Titre de l'article</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input type="text" name="categ" id="categ" placeholder="Web">
                    <label for="categ">Catégorie</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input type="text" name="auteur" id="auteur" value="<?= $_SESSION['pseudo'] ?>">
                    <label for="auteur">Auteur</label>
                </div>
                <div class="input-field col s12">
                    <textarea name="contenu" id="contenu" cols="30" rows="20"></textarea>
                </div>
                <div class="col s12">
                    <button type="submit" class="btn btn-agency">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>