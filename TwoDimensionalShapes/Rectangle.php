<?php

require_once __DIR__ . '/../GeometricFigures.php';

class Rectangle implements TwoDimensionalShape
{
    private int|float $length;
    private int|float $width;

    function __construct(int|float $length, int|float $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2*($this->length + $this->width);
    }
}
