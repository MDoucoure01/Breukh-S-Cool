<?php

require_once('../controllers/AnneeController.php');
require_once('../controllers/ClasseController.php');
require_once('../controllers/EleveController.php');
require_once('../controllers/NiveauController.php');
require_once('../controllers/controller.php');

class Route
{
   public $routes=[];

    public function get(string $url, string $action)
  {
    $this->routes['GET'][$url]=$action;
  }

  public function post(string $url, string $action)
  {
    $this->routes['POST'][$url]=$action;
  }

 function run()
  {
    $userPath=$_SERVER['REQUEST_URI'];
    $method=$_SERVER['REQUEST_METHOD'];
    foreach ($this->routes[$method] as $path => $action)
    {
      if($path==$userPath)
      {
        $a=explode('/', $action);
        $method=$a[1];
        $controller=$a[0];
        $controller=new $controller();
        $controller->$method();
        return;
      }
    }
 }


}



















// RewriteEngine on

// RewriteCond %{REQUEST_FILENAME} !-f
// RewriteCond %{REQUEST_FILENAME} !-d
// RewriteRule ^(.*)$ index.php?url=$1 [NC,L]




// require "../controllers/EleveController.php";



// class Route{
//     private $ex;
//     public function __construct()
//     {
//         $this->ex = new EleveController();
//     }
    
//     public function insertEleve()
//     {
//         $this->ex->insert();
//     }
//     public function rec()
//     {
//         $data = $this->ex->recupData();
//         echo "<pre>" ;
//         var_dump($data) ;
//         echo "</pre>";
//     }
// }












// class Router
// {
//     private $url;

//     public function __construct($url)
//     {
//         $this->url = $url;
//     }

//     private function decoupeUrl(): array
//     {
//         $url = $this->url;      
//         $urls = parse_url($url);    
//         $path = $urls['path'];         
//         $paths = explode('/',$path);  
//         $controller = $paths[1];        
//         $fonctionnalite = $paths[2];
//         return ['controller' => $controller,
//         'method' => $fonctionnalite];
//     }

//     public function route()
//     {
//         $url = self::decoupeUrl();
//         $controller = ucfirst($url['controller']);
//         $maclass = $controller.'Controller';
//         $newcontr = new $maclass();
//         $method = $url['method'];
//         $newcontr->$method();  
//     }

    
// }






















































//article
// public function route()
    // {
    //     $controller = new ArticleController();
    //     $tabUrl = parse_url($this->url);
    //     $path = $tabUrl["path"];
    //     switch ($path) {
    //         case '/articles':
    //             $controller->selectAll();
    //             break;

    //         case '/ajout':
    //             $controller->insertArticle();
    //             break;

    //         default:
    //             # code...
    //             break;
    //     }
    // }