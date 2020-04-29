<?php
$app = new app\App();
?>
<a id="barmob" onclick="openNav()" class="sidenav-trigger hide"><i class="fas fa-bars fa-4x"></i></a>
<a id="arrownav" onclick="closeNav()" class="fixed-left hide"><i class="fas fa-arrow-left fa-4x"></i></a>
<nav id="nav" class="bg-color-third sticky-nav">
    <div class="nav-wrapper">
        <div class="row valign-wrapper" id="content-mag">
            <div class="col l3 m6">
                <a href="#" id="img-mag" class="brand-logo"><img src="./assets/logo/agency_logo_small-min.png" alt="Logo de l'agence de communication WEB MAG AGENCY"></a>
                <a id="barmobdef" href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars fa-4x"></i></a>
            </div>
            <div class="col l9 m6">
                <div class="row">
                    <div class="col s8">
                        <h1 id="title-mag">WEBMAG AGENCY - COMMUNICATION WEB</h1>
                    </div>
                    <div class="col s4 hide-on-small-only" id="icon-mag">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-linkedin fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube fa-3x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 center">
                <div class="container center-align">
                    <ul id="nav-mobile" class="hide-on-med-and-down">
                        <li><a href="./">Accueil</a></li>
                        <li><a href="/index.php?p=blog">Blog</a></li>
                        <li><a href="/evenement">Événement</a></li>
                        <li><a href="/formation">Formation</a></li>
                        <li><a href="/coworking">Nos espaces de coworking</a></li>
                        <li><a href="/temoignage">Témoignage</a></li>

                        <?php
                        if (isset($_SESSION['email'])) {
                            echo '<li><a href="./index.php?p=profil">Profil</a></li>
                                <li><a href="./index.php?p=logout">Déconnexion</a></li>';
                        } else {
                            echo '<li><a href="./index.php?p=log">Connexion / Inscription</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>
<div class="row">
    <div class="col s12">
        <?= $app->getAriane() ?>
    </div>
</div>
<ul class="sidenav" id="mobile-demo">
    <li><a href="./">Accueil</a></li>
    <li><a href="./index.php?p=blog">Blog</a></li>
    <li><a href="/localisation">Événement</a></li>
    <li><a href="/localisation">Formation</a></li>
    <li><a href="/localisation">Nos espaces de coworking</a></li>
    <li><a href="/localisation">Témoignage</a></li>
    <?php
    if (isset($_SESSION['email'])) {
        echo '<li><a href="./index.php?p=profil">Profil</a></li>
                                <li><a href="./index.php?p=logout">Déconnexion</a></li>';
    } else {
        echo '<li><a href="./index.php?p=log">Connexion / Inscription</a></li>';
    }
    ?>
</ul>

<div class="zoom-text hide-on-small-only">
    <img src="./assets/utils/a--min.png" onclick="policeSize(false)" alt="Réduire la taille du texte"><br>
    <img src="./assets/utils/a+-min.png" onclick="policeSize(true)" alt="Augmenter la taille du text">
</div>