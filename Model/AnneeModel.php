<?php

require_once "Dbconnexion.php";

class AnneeModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Dbconnexion::connexion();
    } 
    public function getAll()
    {
        $responce = new Dbconnexion();
        $requete = "select * From AnneeScolaire";
        $statement = $this->pdo->prepare($requete);
        $statement->execute();
        $responce->recupfetchAll($statement);
    }
    public function insertion(array $data)
    {
        $requete = "insert into AnneeScolaire (libelle) values (:libelle)";
        $statement = $this->pdo->prepare($requete);
        $statement->execute($data);
    }
    public function verification(array $data)
    {
        $requete = "SELECT * FROM AnneeScolaire WHERE libelle LIKE (:libelle)";
        $statement = $this->pdo->prepare($requete);
        $statement->execute($data);
        $responce = new Dbconnexion();
        return $responce->recupfetchAll($statement);
    }
    public function supprimer(array $data)
    {
        $requete = "DELETE FROM AnneeScolaire WHERE libelle = (:libelle)";
        $statement = $this->pdo->prepare($requete);
        $statement->execute($data);
    }
    public function modifier(array $data)
    {
        $requete = "UPDATE AnneeScolaire SET libelle = (:libelle) WHERE :libelle";
        $statement = $this->pdo->prepare($requete);
        $statement->execute($data);
    }
}