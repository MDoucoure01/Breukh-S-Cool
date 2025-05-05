<?php
require "../Model/AnneeModel.php";


class AnneeController{
    private $model;
    public function __construct()
    {
        $this->model = new AnneeModel();
    }
    public function lister()
    {
        // $data = $this->model->getAll();
        $data = "bonjouur";
        var_dump("bonjour");
        require_once "Vue/niveau.html.php";
    }
    public function verification()
    {
        if (isset($_POST['ok']) && !empty($_POST['libelle'])){
            $libelle = $_POST['libelle'];
            $stock = $this->model->verification(["libelle"=>$libelle]);
            if (empty($stock)) {
                return $valeur = true;
            }else {
                return $valeur = false;
            }
        }
    }
    public function estAnneeScolaireValide()
    {
        if (isset($_POST['ok'])) {
            $anneeScolaire = $_POST['libelle'];
            $annees = explode('/', $anneeScolaire);
            if (count($annees) === 2) {
                if ((strlen($annees[0]))===4 && (strlen($annees[1]))===4) {
                    $anneeDebut = intval($annees[0]);
                    $anneeFin = intval($annees[1]);
                    if ($anneeFin == ($anneeDebut + 1)) {
                        return $seccession = true;
                    }else {
                        return $seccession = false;
                    }
                }else {
                    return false;
                }
            }else {
                return $seccession = false;
            }
        }
    }
    public function insertion($valeur,$seccession)
    {
        if ($valeur && $seccession) {
            if (isset($_POST['ok']) && !empty($_POST['libelle'])){
                $libelle = $_POST['libelle'];
                $this->model->insertion(["libelle"=>$libelle]);
    
            }else {
                echo "remplissez votre";
            }
        }
    }
    public function suppression()
    {
		if (isset($_POST['supprimer'])) {
            $libelle = $_POST['libelle'];
            $this->model->supprimer(["libelle"=>$libelle]);
		}
    }
    public function modification()
    {
        if (isset($_POST['modifier'])) {
        }
    }
}