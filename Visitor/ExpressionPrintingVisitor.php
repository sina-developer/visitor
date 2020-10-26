<?php

namespace Visitor;

use Visitor\Expressions\Literal;
use Visitor\Expressions\Addition;

class ExpressionPrintingVisitor{
    public function PrintLiteral(Literal $literal)
    {
        echo $literal->Value."\n";
    }
    
    public function PrintAddition(Addition $addition)
    {
        $leftValue = $addition->left->getValue();
        $rightValue = $addition->right->getValue();
        $sum = $addition->getValue();
        echo "$leftValue + $rightValue = $sum \n";
    }
}