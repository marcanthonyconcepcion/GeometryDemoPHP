<?php

require_once __DIR__."/../GeometricFigures/TwoDimensionalShape.php";


class Prism implements ThreeDimensionalShape
{
    private int|float $height;
    private TwoDimensionalShape $base_shape;

    function __construct($base_shape, $height) {
        $this->height = $height;
        $this->base_shape = $base_shape;
    }

    function getVolume(): int|float {
        return $this->height * $this->base_shape->getArea();
    }

    function getSurfaceArea(): int|float {
        return 2 * $this->base_shape->getArea() + $this->height * $this->base_shape->getPerimeter();
    }
}
