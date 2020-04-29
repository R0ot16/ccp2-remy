<?php
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

if(isset($_COOKIE['success'])){
    $app = new app\App();
    $app->returnSuccess($_COOKIE['success']);
}

$blog = new app\Articles();

$blog->setPage($page);

$blogs = $blog->getAllArticles();

?>
<div class="row">
    <?php if (isset($_SESSION['level']) && $_SESSION['level'] > 0) { ?>
        <div class="col s12">
            <a href="./index.php?p=blogadd"><button class="btn btn-agency">Ajouter un article</button></a>
        </div>
    <?php } ?>
    <div class="col s12 m12 l8">
        <?php foreach ($blogs as $one) : ?>
            <div class="card col s12 m12 l12 hoverable rounded">
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
                            <span class="truncate flow-text"><?= $one['contenu'] ?></span>
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
        <div class="container">
            <div class="card col s12 center-align">
                <?php
                $nbpage = $blog->Pagination();
                for ($i = 1; $i <= $nbpage; $i++) {
                    if ($i >= $nbpage) {
                        if (isset($_GET['page']) && $_GET['page'] === "$i") {
                            echo '<a href="./index.php?p=blog&page=' . $i . '">' . $i . '</a>';
                        } else {
                            echo '<a class="black-text" href="./index.php?p=blog&page=' . $i . '">' . $i . '</a>';
                        }
                    } else {
                        if (isset($_GET['page']) && $_GET['page'] === "$i") {
                            echo '<a href="./index.php?p=blog&page=' . $i . '">' . $i . '</a> - ';
                        } else {
                            echo '<a class="black-text" href="./index.php?p=blog&page=' . $i . '">' . $i . '</a> - ';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col s12 m12 l4">
        <div class="card">
            <div class="card-title">
                <h5>Categorie</h5>
            </div>
            <div class="card-content">
                <ul>
                    <li><a href="#">Nouveautés</a></li>
                    <li><a href="#">Actualité</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>