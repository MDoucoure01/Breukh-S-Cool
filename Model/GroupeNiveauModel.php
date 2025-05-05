<?php
require_once "Dbconnexion.php";

class GroupeNiveauModel
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Dbconnexion::connexion();
        echo "connexion a la base de donnee";
    }
    
    public function insertGroupeNiveau(array $data){
        $requete = "insert into GroupeNiveau (libelle) values (:libelle)";
        $statement = $this->pdo->prepare($requete);
        $statement->execute($data);
    }
    
    public function recuperer()
    {
        $requete = "select * From Niveau";
        $statement = $this->pdo->prepare($requete);
        $statement->execute();
        $recupdata = new Dbconnexion();
        return $recupdata->recupfetchAll($statement);
    }
}