<?php

class controller
{
    private $direct;
    public function render($view, $data)
    {
      require __DIR__."/../Vue/$view";
    }

    public function home()
    {
        $this->render('dash.html.php',[]);
    }
    public function connexion()
    {
        $this->render('Connexion.html.php',[]);
    }
    public function AjoutEleve()
    {
        $this->render('GestionEleve.html.php',[]);
    }
    public function AjoutAnnee()
    {
        $this->render('niveau.html.php',[]);
    }
    public function Modal()
    {
        $this->render('Modal.html.php',[]);
    }

   

}
