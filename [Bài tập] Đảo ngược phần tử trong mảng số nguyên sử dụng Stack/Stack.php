<?php

class Stack
{
    private $stack;
    private $newStack;

    public function __construct()
    {
        $this->stack = array();
        $this->newStack=array();
    }

    function push($value)
    {
        array_push($this->stack, $value);
    }

    function pop()
    {
        $result = array_pop($this->stack);

        array_push($this->newStack,$result);

    }

    function getNewStack(){
        return $this->newStack;

    }
    function getStack()
    {
        return $this->stack;
    }



}

$stack = new Stack();
$stack->push(5);
$stack->push(7);
$stack->push(10);
$stack->push(3);
$stack->push(15);
$stack->push(20);
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();


echo "<pre>";
print_r($stack->getNewStack());
echo "</pre>";

echo "<pre>";
print_r($stack->getStack());
echo "</pre>";
