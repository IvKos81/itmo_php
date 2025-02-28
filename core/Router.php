<?php
// require_once 'Autoloader.php';
// Autoloader::init();
// require_once __DIR__ . "/../../engine/app/view/View.php";
namespace ElCapitano\PhpUser2;

use App\Controller\MainController; 

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = __DIR__ . '/../routes.php';
        $this->routes = include_once($routesPath);
    }

    public function run()
    {
    var_dump('I');

        $uri = $this->getURI();

        if (!$uri) {
            $obj = new MainController();
            $obj->actionIndex();
            return null;
            // var_dump('Роутер пуст');
        }
        $controllerName = "";
        // $actionName = ;
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $segments = explode('/', $path);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments));
                $controllerName = 'App\\Controller\\' . $controllerName;
                $controllerObject = new $controllerName();
                $result = $controllerObject->$actionName();
                // break;
                // var_dump($controllerFile);
            }
        }

        if (!$controllerName) {
            // Page not found
            $obj = new MainController();
            $obj->actionNotFound();
            // break;
        }
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
}
