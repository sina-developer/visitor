<?php

namespace Visitor\Expressions;

use Visitor\Abstracts\Expression;
use Visitor\ExpressionPrintingVisitor;

class Literal extends Expression{
    private $value;

    public function __construct($value){
        $this->value = $value;
    }

    public function Accept(ExpressionPrintingVisitor $visitor){
        $visitor->PrintLiteral($this);
    }
    public function getValue(){
        return $this->value;
    }
}