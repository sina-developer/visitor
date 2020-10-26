<?php

namespace Visitor\Abstracts;

use Visitor\ExpressionPrintingVisitor;

abstract class Expression{
    public abstract function Accept(ExpressionPrintingVisitor $visitor);
    public abstract function getValue();
}