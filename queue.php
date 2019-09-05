<?php


class Queue
{
    public $f;
    public $r;
    public $list;

    function __construct()
    {
        $this->f = 0;
        $this->r = 0;
        $this->list = [];
    }

    function push($value)
    {
        $this->list[$this->r++] = $value;
    }

    function pop()
    {
        if($this->f < $this->r){
            $this->list[$this->f++] = null;
        }
    }

    function show()
    {
        if ($this->f != $this->r) {
            foreach ($this->list as $index => $item) {
                if ($index >= $this->f) {
                    print($item);
                }
            }
        }
    }
}

$queue = new Queue();
$queue->push(1);
$queue->push(2);
$queue->push(3);
$queue->push(4);
$queue->push(5);

$queue->pop();
$queue->pop();
$queue->pop();
$queue->pop();
$queue->show();

