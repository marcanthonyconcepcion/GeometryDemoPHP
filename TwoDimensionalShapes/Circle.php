<?php


require_once __DIR__ . '/../GeometricFigures.php';

class Circle implements TwoDimensionalShape
{
    private int|float $radius;

    function __construct(int|float $radius) {
        $this->radius = $radius;
    }

    function getArea() {
        return pi() * pow($this->radius,2);
    }

    function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}
