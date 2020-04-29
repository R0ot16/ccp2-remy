<?php

namespace app;

class App
{

    public function returnError($err)
    {
        /*
            CONNEXION / INSCRIPTION ERROR
        */
        if ($err === "lx001") {
            $this->echoNotif("Connexion / Inscription", "Une erreure à été rencontrée, si le problème persiste veuillez nous contacter.");
        } else if ($err === "lx002") {
            $this->echoNotif("Connexion / Inscription", "Veillez à bien remplir tous les champs.");
        } else if ($err === "lx003") {
            $this->echoNotif("Connexion", "Identifiants incorrect, veuillez réessayer ou creer un compte.");
        } else if ($err === "lx004") {
            $this->echoNotif("Connexion", "Mot de passe incorrect, veuillez réessayer.");
        }
        /**
         * ARTICLES ERROR 
         */
        else if ($err === "bx001") {
            $this->echoNotif("Article", "Un des champs n'à pas été remplis correctement.");
        } 
        /**
         * EDITION ARTICLE ERROR
         */
        else if($err === "ex001"){
            $this->echoNotif("Edition", "Un des champs n'a pas été remplis.");
        }
        else {
            $this->echoNotif('Erreur', "Erreur inconnue, veuillez contacter un administrateur du site.");
        }

        setcookie('error', null);
    }

    public function returnSuccess($s)
    {
        /*
            CONNEXION / INSCRIPTION SUCCESS
        */
        if ($s === "lxs01") {
            $this->echoSuccess("Inscription", "Vous êtes maintenant inscris, vous pouvez vous connecter.");
        } 
        /**
         * ARTICLE SUCCESS
         */
        else if($s === "bxs01"){
            $this->echoSuccess("Article", "L'article à bien été ajouté, il est maintenant en attente de validation.");
        } else if($s === "bxs02"){
            $this->echoSuccess("Article", "L'article à bien été accepté.");
        } else if($s === "bxs03"){
            $this->echoSuccess("Article", "L'article à bien été refusé.");
        } else if($s === "bxs04"){
            $this->echoSuccess("Article", "L'article à bien été supprimé !");
        } else if($s === "bxs05"){
            $this->echoSuccess("Article", "L'article à bien été édité !");
        }
        else {
            $this->echoNotif('Erreur', "Erreur inconnue, veuillez contacter un administrateur du site.");
        }
        setcookie("success", null);
    }

    public function getAriane(){
        $url = "";
        if(isset($_GET['p'])){
            if($_GET['p'] !== "acceuil"){
                $url .= '<a href="./index.php">Accueil</a>';
            }
            if($_GET['p'] === "blog" || $_GET['p'] === "single"){
                $url .= ' - <a href="./index.php?p=blog">Blog</a>';
            }
            if($_GET['p'] === "single"){
                if(isset($_GET['id'])){
                    $arts = new Articles();
                    $art = $arts->getOneArticle($_GET['id']);

                    foreach($art as $a){
                        $url .= ' - <a href="./index.php?p=single&id=' . $a['id'] .'">'.$a['titre'].'</a>';
                    }
                }
            }
        }
        return $url;
    }

    private function echoNotif($title, $text)
    {
        echo '<div id="error" class="card rounded show-error">
                    <div id="title-error" class="card-title rounded">
                    ' . $title . '
                    </div>
                    <div id="text-error" class="card-content">
                    ' . $text . '
                    </div>
                </div>';
    }

    private function echoSuccess($title, $text)
    {
        echo '<div id="success" class="card rounded show-error">
                    <div id="title-error" class="card-title rounded">
                    ' . $title . '
                    </div>
                    <div id="text-error" class="card-content">
                    ' . $text . '
                    </div>
                </div>';
    }

    public function getLevel($lvl)
    {
        switch ($lvl) {
            case 0: {
                    return "Membre";
                }
            case 1: {
                    return "Rédacteur";
                }
            case 2: {
                    return "Responsable editorial";
                }
            case 3: {
                    return "Administrateur";
                }
        }
    }

    public function getOptions($lvl)
    {
        $retour = "";
        if ($lvl >= 0) {
            $retour = '<a href="./index.php?p=blog"><button class="btn btn-agency">Lire le blog</button></a>';
        }

        if ($lvl >= 1) {
            $retour .=  '<a href="./index.php?p=blogadd"><button class="btn btn-agency">Ajouter un article</button></a>
                        <a href="./index.php?p=mesarticles"><button class="btn btn-agency">Mes articles</button></a>';
        }

        if ($lvl >= 2) {
            $retour .=  '<a href="./index.php?p=moderblog"><button class="btn btn-agency">Voir les articles en attentes</button></a>';
        }

        if ($lvl >= 3) {
            $retour .=  '<a href="./index.php?p=gestionblog"><button class="btn btn-agency">Gerer le blog</button></a>';
        }
        echo $retour;
    }
}
