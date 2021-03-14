<?php

require_once __DIR__."/../GeometricFigures.php";


class Sphere implements ThreeDimensionalShape
{
    private int|float $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    function getVolume(): int|float {
        return 4 * pi() * pow($this->radius,3)/3;
    }

    function getSurfaceArea(): int|float {
        return 4 * pi() * pow($this->radius,2);
    }
}
