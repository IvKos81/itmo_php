<?php

var_dump($_SERVER);
exit(0);
//массив
// $arr = array(
//     -6 => 'Январь',
//     'Февраль',
//     -10 => 'Март',
//     'апрель'
// );
// var_dump($arr);

$users = array(
    ['Login' => 'admin', 'password' => 123],
    ['Login' => 'oper', 'password' => 426],
);

$mass = ['login' => 'admin', 'password' => 321];
// var_dump($users);

// foreach($mass as $key => $value) {
//     var_dump($key);
//     var_dump($value);
// };

function add($x, $y) {
    var_dump($GLOBALS['mass']);
    return $x + $y;
}
add(2, 3);

exit(0);

//итерация целочисленного массива
$mass = ['a', true, 123, 'exit', 'add'(2, 3) ];

foreach($mass as $value) {
    // var_dump($key);
    var_dump($value);
    if ('exit' === $value) {
        break;
    };
    
};

// $narr = [[['a'], ['b']], [['c'],['d']]];

// var_dump($narr[1][0][0]);

// $command_line = $GLOBALS['argv'];
// $fn = $GLOBALS['argv'][1];
// $arg1 = $GLOBALS['argv'][2];
// $arg2 = $GLOBALS['argv'][3];
// var_dump($fn($arg1, $arg2))
// var_dump($GLOBALS['argv']);
// $GLOBALS['argv'][1]()

var_dump($_ENV);
// var_dump($GLOBALS['GDM_LANG']);
$ru = 'Меню';
$en = 'Menu';
$menu = $GLOBALS['_SERVER']['GDM_LANG'] == 'ru' ? $ru : $en;
var_dump($menu);


