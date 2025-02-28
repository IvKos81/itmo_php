<?php
namespace ElCapitano\PhpUser2;

use App\View\View;

// require_once __DIR__ . "/../app/view/View.php";

class Page
{
    public string $html = "";
    public string $feed = "";
    public string $paginator = "";
    // ... другие свойства

    public function __construct() {} // Пустой конструктор

    public function __toString(): string
    {
        return $this->html;
    }
}


interface PageBuilder
{
    public function setFeed();
    public function setPaginator();
    //    ... другие методы для установки свойств
}

//implements PageBuilder {
class Paginator  implements PageBuilder
{

    private Page $page;

    const LIMIT = 5;
    const OFFSET = 0;
    private $data = [];
    private $limit = Null;
    private $offset = Null;
    private $flag = 'ajax';


    public function __construct($data, $flag = 'ajax')
    {

        $this->page = new Page();
        $this->flag = $flag;
        $this->data = $data;
        $this->limit = isset($_GET['limit']) ? $_GET['limit'] : self::LIMIT;
        $this->offset = isset($_GET['offset']) ? $_GET['offset'] : self::OFFSET;
    }

    public function setFeed()
    {
        $portial = array_slice($this->data, $this->offset, $this->limit);
        $data = View::render(['box' => $portial], 'portial_music.php');
        // var_dump ($data);
        return $data;
    }

    public function setPaginator()
    {
        $len = sizeof($this->data);
        $contPage = intdiv($len, $this->limit);
        for ($i = 0; $i < $contPage; $i++) {
            $this->page->paginator .= '<a href="portial.php?offset=' . self::LIMIT * $i .
                '&limit=' . self::LIMIT . '">' . $i . '</a>&nbsp; ';
        }
        return $this;
    }
}

// Клиентский код
// $builder = new MusicPageBuilder($arrMusic);
// $page = $builder->setFeed()->setPaginator()->build();
// echo $page . PHP_EOL;

// $p = new Paginator($arrMusic);
// $p->renderFeed();
// $p->renderPaginator();
// $p->renderPage();
