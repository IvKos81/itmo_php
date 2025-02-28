<?php
 class StackError extends AssertionError {}

class Lifo {
    public $_lifo = [];

    public function push($value) {
        $this->_lifo[] = $value;
    }

    public function pop() {
        $max_size = sizeof($this->_lifo);
        if ($max_size == 0 ) return NULL; 
        // var_dump($max_size);
        $val = $this->_lifo[$max_size - 1];
        unset($this->_lifo[$max_size -1 ]);
        return $val; 
    }
}

$stack = new Lifo();
$stack->push(199);
$stack->push(200);
$stack->push(-234);
var_dump($stack->_lifo);
$v = $stack->pop();
$v = $stack->pop();
$v = $stack->pop();
var_dump($v);

//assert( $v == -235, new StackError('Ошибка стека!!!'));
