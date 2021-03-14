<?php

require_once __DIR__."/../TwoDimensionalShapes/Circle.php";
require_once "Prism.php";


class Cylinder extends Prism
{
    function __construct(int|float $height, int|float $radius) {
        parent::__construct(new Circle($radius), $height);
    }
}
