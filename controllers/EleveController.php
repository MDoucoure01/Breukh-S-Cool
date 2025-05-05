<?php

require ("../Model/Eleve.php");


class EleveController
{   
    private $model;
    public function __construct()
    {
        $this->model = new Eleve();
    }
    public function insert()
    {
        // $nom = $_POST['nom_Eleve']
        // $prenom = $_POST['prenom_Eleve']
        // $numero = $_POST['nuemro_Eleve']
        // $date_naisance = $_POST['date_naissance']
        // $type = $_POST['type']
        $this->model->insert(["nom"=>$nom, "prenom"=>$prenom, "numero"=>$numero, "date_naissance"=>$date_naisance, "type"=>$type]);
    }
    public function recupData()
    {
        return $this->model->recuperer();
    }
}









// public function selectAll()
// {
//     $recupDonnee = $this->model-> all();
//     echo json_encode($recupDonnee);
// }