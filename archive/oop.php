<?php

class SectionTree {
    protected $radius = 10;
    public $hight = 50; // в см
    public function __construct(int $r, int $h)
    {
        $this->radius = $r;
        $this->hight = $h;
    }
}

class SectionTreeChild extends SectionTree {
    public $wight = 50;
    public function __construct() 
    {
        parent::__construct(233, 23);
    }

    public function getRadius()
    {
        return $this->radius;
    }

}

$objChild = new SectionTreeChild(255, 22);

var_dump($objChild->getRadius());

// var_dump(SectionTree::$radius);

class ChristmasTree
{
    private $sectionBox = [];
    protected $color = 'red';

    public function getColor()
    {
        return $this->color;
    }

    public function addSection($section)
    {
        array_push($this->sectionBox, $section);
    }

    public function debug()
    {
        var_dump($this->sectionBox);
    }

}
// () - вызов конструктора, оператор call

$s_1 = new SectionTree(12, 2);
$s_2 = new SectionTree(3, 5);

$tree = new ChristmasTree();
$tree->addSection($s_1);
$tree->addSection($s_2);
// $tree->addSection('ddd');
// $tree->addSection(283746);
$tree->debug();


// var_dump($obj->getColor());

class DB {
    const SQL_SELECT_USER = 'select, id, name, login from user, where id = %';
    static private $_instanse;
    private function __construct()
    {

    }

    static public function getInstanse()
    {
        if (!self::$_instanse) {
        self::$_instanse = new self();
        }
        return self::$_instanse;
    }
    static public function runSQL()
    {
        var_dump(self::SQL_SELECT_USER);
    }
}

$objInst = DB::getInstanse();
DB::runSQL();
var_dump($objInst);