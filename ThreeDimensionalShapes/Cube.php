<?php

require_once "RectangularPrism.php";


class Cube extends RectangularPrism
{
    function __construct(int|float $side) {
        parent::__construct($side, $side, $side);
    }
}
