<?php
namespace App\Controller;

use App\Model\MusicModel;
use App\View\View;
use ElCapitano\PhpUser2\Paginator;

// require_once __DIR__ . "/../model/MusicModel.php";
// require_once __DIR__ . "/../view/View.php";
// require_once __DIR__ . "/../../core/Paginator.php";

class MainController
{
    private $limit = Null;
    private $offset = Null;

    public function actionIndex()
    {
        $result = MusicModel::getData();
        $builder = new Paginator($result);
        $portial = $builder->setFeed();
        echo (View::render(['portial' => $portial], 'index_tpl.php'));
    }


    public function actionNotFound()
    {
        echo (View::render([], '404.php'));
    }

    public function actionPortial()
    {
        // $this->limit = isset($_GET['limit']) ? $_GET['limit'] : Null;
        // $this->offset = isset($_GET['offset']) ? $_GET['offset'] : Null;
        $result = MusicModel::getData();
        // var_dump($result);
        $builder = new Paginator($result);
        $page = $builder->setFeed();
        echo $page;
    }
}
