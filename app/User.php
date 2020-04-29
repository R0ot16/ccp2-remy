<?php

namespace app;

class User{
    public function verifUser($email, $pass){
        $connexion = new Database();
        $connexion->connexion();

        $req = "SELECT * FROM users WHERE email = ?";
        $q = $connexion->getConnexion()->prepare($req);
        $q->execute(array(
            $email
        ));

        $find = false;

        $connexion->deconnexion();

        foreach($q as $one){
            $find = true;
            if(password_verify($pass, $one['password'])){
                $_SESSION['email'] = $one['email'];
                $_SESSION['level'] = $one['level'];
                $_SESSION['pseudo'] = $one['pseudo'];
                header('Location: ./index.php?p=profil');
            } else {
                setcookie('error', 'lx004');
                header('Location: ./index.php?p=log');
            }
        }

        if($find === false){
            setcookie('error', 'lx003');
            header('Location: ./index.php?p=log');
            die();
        }
    }

    public function registerUser($pseudo, $email, $pass){
        if(empty($pseudo) || empty($email) || empty($pass)){
            setcookie('error', 'lx002');
            header('Location: ./index.php?p=log');
            die();
        }

        $connexion = new Database();
        $connexion->connexion();

        $pass = password_hash($pass, PASSWORD_ARGON2I);

        $req = "INSERT INTO users(pseudo, email, password) VALUES (?,?,?)";
        $q = $connexion->getConnexion()->prepare($req);
        $q->execute(array(
            $pseudo, $email, $pass
        ));

        $connexion->deconnexion();
        
        setcookie('success', 'lxs01');
        header('Location: ./index.php?p=log');
    }
}