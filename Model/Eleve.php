<?php
require_once "Dbconnexion.php";

class Eleve
{
    private $id_eleve;
    private $nom;
    private $prenom;
    private $numero;
    private $date;
    private $type;
    private $pdo;

    public function __construct()
    {
        $this->pdo = Dbconnexion::connexion();
        echo "connexion a la base de donnee";
    }



    public function insert(array $data){
        $requete = "insert into Eleve (nom,prenom,numero,date_naissance,type) values (:nom, :prenom,:numero, :date_naissance, :type)";
        $statement = $this->pdo->prepare($requete);
        $statement->execute($data);
    }
        
    public function recuperer()
    {
        $requete = "select * From Eleve";
        $statement = $this->pdo->prepare($requete);
        $statement->execute();
        $recupdata = new Dbconnexion();
        return $recupdata->recupfetchAll($statement);
    }
}














// public function __construct()
// {
    // public function all()
    // {
    //     $requete = "select * from Eleve";
    //     $statement = $this->pdo->prepare($requete);
    //     $statement->execute();
    //     $recupdata = new Dbconnexion();
    //     return $recupdata->recupfetchAll($statement);
    // }
    
    // public function insert(array $data)
    // {
    //     $requete = "insert into Eleve (nom,prenom,numero,date_naissaice,type) values (:nom, :prenom,:numero, :date, :type)";
    //     $statement = $this->pdo->prepare($requete);
    //     $statement->execute($data);
    // }
//     $this->pdo = Dbconnexion::connexion();
// }