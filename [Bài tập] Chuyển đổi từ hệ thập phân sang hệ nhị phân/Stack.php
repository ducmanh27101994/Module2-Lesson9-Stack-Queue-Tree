<?php

class Stack {
    private $stack;

    public function __construct()
    {
        $this->stack=array();
    }

    function binaryConverter($number){
        return decbin($number);
    }





}

$stack = new Stack();
print_r($stack->binaryConverter(83));

//echo "<pre>";
//print_r($stack->getStack());
//echo "<pre>";