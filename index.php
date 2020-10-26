<?php

require("./autoload.php");

use Visitor\ExpressionPrintingVisitor;
use Visitor\Expressions\Addition;
use Visitor\Expressions\Literal;

$visitor = new ExpressionPrintingVisitor();


$q = new Addition( new Addition( new Literal(2) , new Literal(5)), new Literal(3));

$q->accept($visitor);

