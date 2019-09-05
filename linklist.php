<?php

class Node
{
    public $next;
    public $value;

    public function __construct($value)
    {
        $this->next = null;
        $this->value = $value;
    }
}

class LinkList
{

    public $head;

    public function __construct($value)
    {
        $this->head = new Node($value);
    }

    public function insertLast($value){
        $node = new Node($value);
        $next = $this->head;
        while($next){
            if(is_null($next->next)){
                $next->next = $node;
                break;
            }else{
                $next = $next->next;
            }
        }
    }

    public function readLinkList(){
        $next = $this->head;
        while(true){
            if(is_null($next->next)){
                print($next->value);
                break;
            }else{
                print($next->value);
                $next = $next->next;
            }
        }
    }

    public function insertAfterNode($node, $value){
        $newNode = new Node($value);
        $parentNext = $node->next;
        $node->next = $newNode;
        $newNode->next = $parentNext;
    }
}




$linkList = new LinkList(1);
$linkList->insertLast(2);
$linkList->insertLast(3);
$linkList->insertAfterNode($linkList->head->next, 4);
$linkList->readLinkList();
