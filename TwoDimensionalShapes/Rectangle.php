<?php

require_once __DIR__ . '/../GeometricFigures/TwoDimensionalShape.php';

class Rectangle implements TwoDimensionalShape {

    private int|float $length;
    private int|float $width;

    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea(): int|float {
        return $this->length * $this->width;
    }

    public function getPerimeter(): int|float {
        return 2*($this->length + $this->width);
    }
}
