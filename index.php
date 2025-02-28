<?php

// require_once './core/Autoloader.php';


// Autoloader::init();


// Включение отображения ошибок на время разработки сайта
ini_set('display_errors', 1);
define('ROOT', dirname(__FILE__));
error_reporting(E_ALL);


require_once __DIR__ . '/vendor/autoload.php';

use ElCapitano\PhpUser2\Db;
use ElCapitano\PhpUser2\Router;

// Подключаем файл Router.php используя следующие команды:

require_once (ROOT . '/core/Router.php');

require_once __DIR__ . '/config/main.php';
//проверка: echo ROOT; (C:\OSPanel\domains\test2)

//Определение константы конфига БД
define('CONFIG_DB',  $db);

// создаем экземпляр класса Router
// $router = new Router();
$router = new Router();
//  запускаем метод run(), тем самым, передав на него управление
$router->run();

exit;





// var_dump($_SERVER['REQUEST_URI']);
// $uri = trim($_SERVER['REQUEST_URI'], '/');

// $mass_uri = explode('/', $uri);
// var_dump($mass_uri);

// $controller = $mass_uri[0];
// $action = $mass_uri[1] ? $mass_uri[1] : 'index';
// $nameClassController = ucfirst($controller) . 'Controller';

// $cntr = new $nameClassController;
// $cntr->$action();



// class MainModel
// {
//     public function getData()
//     {
//         return [
//             'title' => 'Main Page',
//             'h3' => 'С новым годом!'
//         ];
//     }
// }
// class MainController
// {
//     public function index()
//     {
//         $model = new MainModel();
//         $view = new MainView();
//         $result = $model->getData();
//         $view->render($result, 'main.tpl');
//     }
// }
// class MainView
// {
//     public function render($data, $tmpl)
//     {
//         var_dump($data);
//     }
// }

// $cont = new Route();
