<?php

class Stack
{
    public $list;
    public $top;

    function __construct()
    {
        $this->list =[];
        $this->top = 0;
    }

    function push($value){
        $this->list[$this->top++] = $value;
        // or we can use function array_push()
    }

    function pop(){
        // or we can use function array_slice()
        if($this->top > 0){
            unset($this->list[--$this->top]);
        }
        return null;
    }
}

$stack = new Stack();
$stack->push(1);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->pop();
var_dump($stack->list);die;