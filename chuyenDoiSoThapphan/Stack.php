<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function add($element)
    {
        array_push($this->stack,$element);
    }

    public function getElement()
    {
       $newElement = array_pop($this->stack);
        return $newElement;
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}