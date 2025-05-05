<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


require "../Router/Route.php";
// require_once "../Vue/dash.html.php";
$route = new Route();

$route->get('/','controller/connexion');
$route->post('/','controller/connexion');

$route->get('/','controller/home');
$route->post('/','controller/home');

$route->get('/AjoutEleve','controller/AjoutEleve');
$route->post('/AjoutEleve','controller/AjoutEleve');


$route->get('/AjoutAnnee','controller/AjoutAnnee');
$route->post('/AjoutAnnee','controller/AjoutAnnee');


$route->get('/Modal','controller/Modal');
$route->post('/Modal','controller/Modal');

$route->run();













// require_once "../controllers/NiveauController.php";


// $test = new NiveauController();
// $test->insert();

















// $route->insertEleve();
// $route->rec();
// $_SERVER["REQUEST_URI"]