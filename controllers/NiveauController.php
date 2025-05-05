<?php

require ("../Model/GroupeNiveauModel.php");


class NiveauController
{   
    private $model;
    public function __construct()
    {
        $this->model = new GroupeNiveauModel();
    }

    public function insert()
    {
        $libelle = $_POST['libelle'];
        $this->model->insertGroupeNiveau(["libelle"=>"riz"]);
        echo "inserrion reussi";
    }
    public function recupData()
    {
        return $this->model->recuperer();
    }
}