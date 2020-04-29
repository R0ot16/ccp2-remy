<?php

$user = new app\User();

if(isset($_GET['form'])){
    if($_GET['form'] === "login"){
        if(empty($_POST['email']) || empty($_POST['pass'])){
            setcookie('error', "lx002");
            header('Location: ./index.php?p=log');
            die();
        }
        
        $user->verifUser($_POST['email'], $_POST['pass']);
    } else if($_GET['form'] === "register"){
        if(empty($_POST['emaili']) || empty($_POST['passw']) || empty($_POST['pseudo'])){
            setcookie('error', "lx002");
            header('Location: ./index.php?p=log');
            die();
        }
        $user->registerUser($_POST['pseudo'], $_POST['emaili'], $_POST['passw']);
    }
} else {
    setcookie('error', 'lx001');
    header("Location: ./index.php?p=log");
}