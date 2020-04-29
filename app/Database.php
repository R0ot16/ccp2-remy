<?php
namespace app;
use PDO;
use PDOException;

class Database
{
    private $user;
    private $password;
    private $dsn;
    private $connexion;

    public function __construct()
    {
        $this->user = 'root';
        $this->password = '';
        
        $this->dsn = 'mysql:dbname=ccp2;host=localhost;charset=UTF8';
    }

    public function connexion()
    {
        try
        {
            $this->connexion = new PDO($this->dsn, $this->user, $this->password);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $error)
        {
            echo 'FATAL ERROR : Connexion failed : ' . $error->getMessage();
        }
    }

    public function getConnexion()
    {
        return $this->connexion;
    }

    public function deconnexion()
    {
        $this->connexion = null;
    }
}