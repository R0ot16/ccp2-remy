<?php

namespace app;

class Articles{

    private $perPage = 10;
    private $nbrArticle = 0;
    private $cPage;
    private $nbPage;

    public function setPage($page){
        $this->cPage = $page;
    }

    public function Pagination(){
        $connexion = new Database();
        $connexion->connexion();

        $query = "SELECT COUNT(id) as id FROM blog";
        $statement = $connexion->getConnexion()->prepare($query);
        $statement->execute();

        $connexion->deconnexion();

        foreach($statement as $line){
            $this->nbrArticle = $line['id'];
        }

        $this->nbPage = ceil($this->nbrArticle/$this->perPage);

        return $this->nbPage;
    }

    public function getAllArticles()
    {
        $connexion = new Database();
        $connexion->connexion();

        if($this->cPage === 0){
            $this->cPage = 1;
        }

        $query = "SELECT * FROM blog WHERE attente = 0 ORDER BY id DESC LIMIT ".(($this->cPage-1)*$this->perPage).",".$this->perPage;

        $statement = $connexion->getConnexion()->prepare($query);
        $statement->execute();
        $connexion->deconnexion();
        return $statement;
    }

    public function getAllArticlesAttente()
    {
        $connexion = new Database();
        $connexion->connexion();

        if($this->cPage === 0){
            $this->cPage = 1;
        }

        $query = "SELECT * FROM blog WHERE attente = 1 ORDER BY id DESC";

        $statement = $connexion->getConnexion()->prepare($query);
        $statement->execute();
        $connexion->deconnexion();
        return $statement;
    }

    public function valideArticle($article, $valide){
        $connexion = new Database();
        $connexion->connexion();

        if($valide === 1){
            setcookie("success", "bxs02");
            $req = "UPDATE blog SET attente = 0 WHERE id = ?";
        } else {
            setcookie("success", "bxs03");
            $req = "UPDATE blog SET refus = 1 WHERE id = ?";
        }

        $q = $connexion->getConnexion()->prepare($req);
        $q->execute(array(
            $article
        ));

        $connexion->deconnexion();

        header('Location: ./index.php?p=moderblog');
        die();
    }

    public function getOneArticle($article){
        $connexion = new Database();
        $connexion->connexion();

        if($this->cPage === 0){
            $this->cPage = 1;
        }

        $query = "SELECT * FROM blog WHERE id = ?";

        $statement = $connexion->getConnexion()->prepare($query);
        $statement->execute(array(
            $article
        ));
        $connexion->deconnexion();
        return $statement;
    }

    public function getMyArticle(){
        $connexion = new Database();
        $connexion->connexion();

        if($this->cPage === 0){
            $this->cPage = 1;
        }

        $query = "SELECT * FROM blog WHERE par = ? ORDER BY id DESC";

        $statement = $connexion->getConnexion()->prepare($query);
        $statement->execute(array(
            $_SESSION['email']
        ));
        $connexion->deconnexion();
        return $statement;
    }

    public function getStatusArticle($article){
        $connexion = new Database();
        $connexion->connexion();

        $req = "SELECT * FROM blog WHERE id = ?";
        $q = $connexion->getConnexion()->prepare($req);
        $q->execute(array(
            $article
        ));

        $retour = "";

        foreach($q as $one){
            if($one['attente'] === "1" && $one['refus'] === "0"){
                $retour = '<span class="orange">En attente</span>';
            } else if($one['attente'] === "0" && $one['refus'] === "0"){
                $retour = '<span class="green">Accepté</span>';
            } else {
                $retour = '<span class="red">Refusé</span>';
            }
        }
        return $retour;
    }

    public function deleteArticle($article){
        $connexion = new Database();
        $connexion->connexion();

        $req = "DELETE FROM blog WHERE id = ?";
        $q = $connexion->getConnexion()->prepare($req);
        $q->execute(array(
            $article
        ));

        setcookie('success', "bxs04");
        header('Location: ./index.php?p=blog');
    }

    public function editArticle($article, $titre, $contenu, $categorie, $auteur){
        $connexion = new Database();
        $connexion->connexion();

        $req = "UPDATE blog SET titre = ?, contenu = ?, categorie = ?, auteur = ? WHERE id = ?";
        
        $q = $connexion->getConnexion()->prepare($req);
        $q->execute(array(
            $titre,
            $contenu,
            $categorie,
            $auteur,
            $article
        ));

        $connexion->deconnexion();
    
        setcookie('success', 'bxs05');
        header('Location: ./index.php?p=single&id='.$article);
    }

    public function addArticle($title, $contenu, $categorie, $auteur){
        $connexion = new Database();
        $connexion->connexion();

        $req = "INSERT INTO blog(titre, contenu, date, auteur, categorie, par) VALUES(?,?,NOW(),?, ?, ?)";
        
        $q = $connexion->getConnexion()->prepare($req);
        $q->execute(array(
            $title,
            $contenu,
            $auteur,
            $categorie,
            $_SESSION['email']
        ));

        $connexion->deconnexion();
    
        setcookie('success', 'bxs01');
        header('Location: ./index.php?p=blog');
    }

    
}