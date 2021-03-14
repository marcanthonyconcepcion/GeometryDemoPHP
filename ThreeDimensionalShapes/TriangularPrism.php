<?php

require_once __DIR__."/../TwoDimensionalShapes/Triangle.php";
require_once "Prism.php";


class TriangularPrism extends Prism
{
    function __construct($height, $a, $b, $c) {
        parent::__construct(new Triangle($a, $b, $c), $height);
    }
}
