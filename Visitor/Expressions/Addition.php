<?php

namespace Visitor\Expressions;

use Visitor\Abstracts\Expression;
use Visitor\ExpressionPrintingVisitor;

class Addition extends Expression{
    public $left;
    public $right;

    public function __construct($left , $right){
        $this->left = $left;
        $this->right = $right;
    }

    public function Accept(ExpressionPrintingVisitor $visitor){
        $visitor->PrintAddition($this);
    }
    public function getValue(){
        return $this->left->getValue() + $this->right->getValue();;
    }
}